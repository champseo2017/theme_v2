(function ($, Vue, Color) {
    'use strict'
    $.fn.animateAutoHeight = function(speed, callback){
      let elem, height;
  
      return this.each(function(i, el){
        el = $(el);
        elem = el.clone().css({"height":"auto"}).appendTo("body");
        height = elem.css("height");
        elem.remove();
  
        el.animate({"height": height}, speed, callback);
      });
    }
  
    let initialized = false;
    
    const defaultAnimationName = 'fadeInDown';
  
    /* Custom Components */
    const $store = new Vue({
      data () {
        return {
          colour: 'rgb(129, 231, 60)',
          quote: {
            text: '',
            author: '',
            loading: false
          }
        }
      },
      methods: {
        cycleColour () {
          this.colour = Color.hue( 45, this.colour ).cssrgb;
          this.$emit('colour-changed');
        },
        fetchQuote () {
          // this.quote.loading = true;
  
          if (this.quote.loading) return;
  
          this.quote.loading = true;
          
  
          $.ajax({
            url: "https://andruxnet-random-famous-quotes.p.mashape.com/",
            data: {cat: 'famous'},
            type: "GET",
            beforeSend: (xhr) => {
              xhr.setRequestHeader("X-Mashape-Key", "ShuGwvnPMTmshM6m9QwAee6i4JZ5p1FbyAMjsn2FHP3VYEBtBF");
              xhr.setRequestHeader("Accept", "application/json");
            },
            success: (response) => {
              
              response = typeof response === 'string' ? JSON.parse(response) : response;
              
              if(!initialized) {
                initialized = true;
                $('.quote').removeClass('before-init');
              }
              
              var resp = response[0]
  
              this.quote.text = resp.quote;
              this.quote.author = resp.author;
              this.quote.loading = false;
  
              this.cycleColour();
              this.animateHeight();
            }
          });
        },
        changeBackground () {
          $('body').css({background: Color.shade( -20, this.colour ).cssrgb});
        },
        animateHeight() {
          requestAnimationFrame(_ => {
            $('.quote').animateAutoHeight();
          })
        }
      }
    });
  
    const ProgressBar = {
      name: 'ProgressBar',
      computed: {
        loading: _ => $store.quote.loading
      },
      watch: {
        loading (loading) {
          if(loading) NProgress.start();
          else NProgress.done();
        }
      },
      template: '<span></span>',
      created () {
        NProgress.configure({ parent: 'body', showSpinner: false });
      }
    };
  
    const RefreshQuoteButton = {
      name: 'RefreshQuoteButton',
      template: `
        <button class="quote__button float--right" :class="{active: loading}" @click="fetchQuote">
          <span :class="{'loader': loading ,'ion-ios-refresh': !loading}"></span>
        </button>`,
      computed: {
        loading: _ => $store.quote.loading
      },
      methods: {
        fetchQuote: $store.fetchQuote
      }
    }
  
    const TwitterShareButton = {
      name: 'TwitterShareButton',
      template: `
        <a class="quote__button quote__button--twitter float--right" :href="url" target="_blank">
          <span class="ion-social-twitter"></span>
        </a>
      `,
      computed: {
        url () {
          return [
            "https://twitter.com/intent/tweet?hashtags=รับทำเว็บไซต์@lineID=boomgt123&related=freecodecamp&text=",
            encodeURIComponent('"' + $store.quote.text + '" ' + $store.quote.author)
          ].join('');
        }
      }
    }
  
    const QuoteText = {
      computed: {
        text: _ => $store.quote.text
      },
      template: `<p class="quote__text animated" style="position: relative;margin-top: 1px;" @animationend="onAnimationend">{{text}}</p>`,
      watch: {
        text () {
          this.$el.classList.add(defaultAnimationName);
        }
      },
      methods: {
        onAnimationend () {
          this.$el.classList.remove(defaultAnimationName);
        }
      }
    };
  
    const QuoteAuthor = {
      computed: {
        author: _ => $store.quote.author
      },
      template: `<p class="quote__author animated" @animationend="onAnimationend">{{author}}</p>`,
      watch: {
        author () {
          this.$el.classList.add(defaultAnimationName);
        }
      },
      methods: {
        onAnimationend () {
          this.$el.classList.remove(defaultAnimationName);
        }
      }
    };
  
    const RandomQuoteMachine = {
      name: 'RandomQuoteMachine',
      template: `
        <div style="height: 100%">
          <div class="quote valign halign before-init" :style='{background: background}'>
            <twitter-share-button></twitter-share-button>
            <refresh-quote-button></refresh-quote-button>
            <quote-text></quote-text>
            <quote-author></quote-author>
            <progress-bar></progress-bar>
          </div>
        </div>
      `,
      computed: {
        background () {
          return $store.colour;
        }
      },
      components: {
        RefreshQuoteButton, TwitterShareButton, QuoteText, QuoteAuthor, ProgressBar
      },
      mounted () {
        $store.fetchQuote();
      }
    };
  
    /* Initialize and mount the root compontent to DOM*/
    (new Vue(RandomQuoteMachine)).$mount('#app');
  })(jQuery, Vue, chromatism)
  