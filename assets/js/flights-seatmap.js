$(function () {
  $(".seat").on("click", function (event) {
    var click = $(this).attr("id");
    var res = click.split("-");

    var field = res[0] + "-" + pax;
    var current = $("#" + field).val();

    /**
     * Has passenger already got a seat ?
     */

    if (current !== "") {
      var old_seat = res[0] + "-" + current;
      $("#" + field + "-price").html("0.00");
      $("#" + field).val("");
      $("#" + old_seat)
        .children(":first-child")
        .attr("src", "/public/imagedb/seating/seat2.png");
    }

    /**
     * Now set a new one
     */

    if (current != res[1]) {
      $("#seat-flight").html(res[0]);
      $("#seat-number").html(res[1]);

      $("#seat-price").html($(this).attr("price"));
      $("#seat-config").html($(this).attr("config"));

      $("#seat-modal").modal("show");
    }
  });

  $(".select-seat").on("click", function (event) {
    console.log("Hello");
    var seat = $("#seat-number").html();
    var flight_no = $("#seat-flight").html();

    var field = flight_no + "-" + pax;
    var seat_img = flight_no + "-" + seat;

    // Change the image source to the selected seat image
    $("#" + seat_img)
      .children(":first-child")
      .attr("src", "../assets/img/seats/seat-selected.png");

    $("#" + seat_img)
      .children(":last-child")
      .css("background-color", "#002d62");

    // Update the price to use .price-2 instead of .price
    $("#" + field + "-price").html($("#" + seat_img + " .price-2").html()); // Assuming .price-2 is inside the selected seat's HTML
    $("#" + field).val($("#seat-number").html());

    // Hide the modal
    $("#seat-modal").modal("hide");
  });

  $(".pax-block").on("click", function () {
    $("#pax-" + pax).removeClass("selected-pax");
    $(this).addClass("selected-pax");

    var id = $(this).attr("id");
    var res = id.split("-");

    pax = res[1];
  });
});
