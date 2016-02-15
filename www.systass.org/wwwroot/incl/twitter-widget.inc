<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'search',
  search: 'Systematics',
  interval: 20000,
  title: '@SystAssn Systematics',
  subject: 'What\'s going on?',
  width: 'auto',
  height: 250,
  theme: {
    shell: {
      background: '#963',
      color: '#ffffff'
    },
    tweets: {
      background: '#ffffff',
      color: '#444444',
      links: '#1985b5'
    }
  },
  features: {
    scrollbar: true,
    loop: true,
    live: true,
    behavior: 'default'
  }
}).render().start();
</script>
