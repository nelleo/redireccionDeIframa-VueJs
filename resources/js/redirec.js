var vue = new Vue({
    el: "#app",
    data() {
      return {
        loaded: false,
        iframe: {
          src: url,
          style: null,
          wrapperStyle: null,
        }
      }
    },
    mounted() {
      let editor = this.$refs.editor;
      this.iframe.style = {
        position: 'absolute',
        width: window.innerWidth,
        height: window.innerHeight,
        top: -editor.offsetTop + "px",
        left: -editor.offsetLeft + "px",
      }    
      this.iframe.wrapperStyle = {
        overflow: 'hidden',
        height: editor.clientHeight + "px",
        width: editor.clientWidth + "px",
      } 
      this.loaded = true;
    }
  });
// importar Vue from 'vue';
// importar VueFriendlyIframe from 'vue-friendly-iframe';

// Vue.use (VueFriendlyIframe);