$(function() {
  $('.digits').countdown({
      date: "December 25, 2015 23:59:59",
      render: function(date) {
        return $(this.el).html(
                "<div class='date'>" + date.days + "<span class='caption'>Days</span></div>" + "<div class='colon'> : </div>" +
                "<div class='date'>" + (this.leadingZeros(date.hours)) + "<span class='caption'>Hours</span></div>" + "<div class='colon'> : </div>" +
                "<div class='date'>" + (this.leadingZeros(date.min)) + "<span class='caption'>Minutes</span></div>" + "<div class='colon'> : </div>" +
                "<div class='date'>" + (this.leadingZeros(date.sec)) + "<span class='caption'>Seconds</span></div>"
              );
      }
  });
});
