<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="/assets/js/common.js"></script>
<?php if( is_front_page() ): ?>
<script src="/assets/js/news.js"></script>
<?php endif; ?>
<?php if( is_page('calendar') ): ?>
<script src='/assets/js/calendar.js'></script>
<script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {



      // locale: 'ja',

      headerToolbar: {
        left: 'prev,next,today',
        // center: 'dayGridMonth,listYear',
        right: 'title'
      },


      displayEventTime: false, // don't show the time column in list view

      // THIS KEY WON'T WORK IN PRODUCTION!!!
      // To make your own Google API key, follow the directions here:
      // http://fullcalendar.io/docs/google_calendar/
      googleCalendarApiKey: 'AIzaSyDorPSRlHxm4b2ru8Bh1FURghtF_PFVrPE',

      // US Holidays
      events: 'calendarhutte@gmail.com',

      eventClick: function(arg) {
        // opens events in a popup window
        window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');

        arg.jsEvent.preventDefault() // don't navigate in main tab
      },

      loading: function(bool) {
        document.getElementById('loading').style.display =
          bool ? 'block' : 'none';
      }

    });

    calendar.render();
  });
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>