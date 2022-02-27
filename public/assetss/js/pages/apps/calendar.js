$("select").formSelect();

let calendar;
var Draggable = FullCalendarInteraction.Draggable;
let date_picker;

var containerEl = document.getElementById("external-events");
var addEvent = document.getElementById("add-event");
var editEvent = document.getElementById("edit-event");
var addEventTitle = document.getElementById("addEventTitle");
var editEventTitle = document.getElementById("editEventTitle");

var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var year = date.getFullYear();

$(document).ready(function () {
  initCalendar();
  addEvetClick();
  editEvetClick();
  flatpickr("#starts-at", {
    enableTime: true,
    allowInput: true,
    dateFormat: "Y-m-d H:i",
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });
  flatpickr("#ends-at", {
    enableTime: true,
    allowInput: true,
    dateFormat: "Y-m-d H:i",
    onOpen: function (selectedDates, dateStr, instance) {
      instance.setDate(instance.input.value, false);
    },
  });
});

function initCalendar() {
  var calendarEl = $("#calendar").get(0);
  calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: ["interaction", "dayGrid", "timeGrid"],
    header: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay",
    },
    editable: true,
    droppable: true,
    navLinks: true,
    eventLimit: true,
    weekNumberCalculation: "ISO",
    displayEventEnd: true,
    lazyFetching: true,
    selectable: true,
    eventMouseEnter: function (info) {
      $(info.el).attr("id", info.event.id);

      $("#" + info.event.id).popover({
        template:
          '<div class="popover" role="tooltip"><div class="arrow"></div><h4 class="popover-header"></h4><div class="popover-body"></div></div>',
        title: info.event.title,
        content: info.event.extendedProps.description,
        placement: "top",
        html: true,
      });
      $("#" + info.event.id).popover("show");
      $(".popover .popover-header").css(
        "color",
        $(info.el).css("background-color")
      );
    },
    eventMouseLeave: function (info) {
      $("#" + info.event.id).popover("hide");
    },
    views: {
      dayGridMonth: {
        eventLimit: 3,
      },
    },

    events: events(),

    select: function (start, end) {
      addEvent.style.display = "block";
      editEvent.style.display = "none";
      addEventTitle.style.display = "block";
      editEventTitle.style.display = "none";

      clearModalForm();
      $(".modal").modal("show");
    },
    eventClick: function (info) {
      addEvent.style.display = "none";
      editEvent.style.display = "block";
      addEventTitle.style.display = "none";
      editEventTitle.style.display = "block";

      let startDate = moment(info.event.start).format("YYYY-MM-DD HH:mm:ss");
      let endDate = moment(info.event.end).format("YYYY-MM-DD HH:mm:ss");

      // console.log(info.event.extendedProps.description);
      $(".modal").modal("show");
      $(".modal").find("#id").val(info.event.id);
      $(".modal").find("#title").val(info.event.title);
      $(".modal").find("#starts-at").val(startDate);
      $(".modal").find("#ends-at").val(endDate);
      $("#categorySelect").val(info.event.classNames[0]);
      $(".modal")
        .find("#eventDetails")
        .val(info.event.extendedProps.description);
    },
  });

  calendar.render();
}

function clearModalForm() {
  var input = document.querySelectorAll('input[type="text"]');
  var textarea = document.getElementsByTagName("textarea");
  for (i = 0; i < input.length; i++) {
    input[i].value = "";
  }
  for (j = 0; j < textarea.length; j++) {
    textarea[j].value = "";
    i;
  }
}

function addEvetClick() {
  $("#add-event").on("click", function (event) {
    var title = $("#title").val();
    var eventDetails = document.getElementById("eventDetails").value;
    var category = $("#categorySelect").find(":selected").val();
    var randomID = randomIDGenerate(
      10,
      "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
    );
    calendar.addEvent({
      id: randomID,
      title: title,
      start: $("#starts-at").val(),
      end: $("#ends-at").val(),
      className: category,
      description: eventDetails,
    });
    // Clear modal inputs
    $(".modal").find("input").val("");
    // hide modal
    $(".modal").modal("hide");
  });
}

function editEvetClick() {
  $("#edit-event")
    .off("click")
    .on("click", function (event) {
      event.preventDefault();
      var category = $("#categorySelect").find(":selected").val();

      var event2 = calendar.getEventById(document.getElementById("id").value);

      var eventDetails = document.getElementById("eventDetails").value;
      var category = $("#categorySelect").find(":selected").val();

      event2.setExtendedProp("id", document.getElementById("id").value + "");
      event2.setProp("title", document.getElementById("title").value + "");
      event2.setStart(
        moment(document.getElementById("starts-at").value).format(
          "YYYY-MM-DD HH:mm:ss"
        )
      );
      event2.setEnd(
        moment(document.getElementById("ends-at").value).format(
          "YYYY-MM-DD HH:mm:ss"
        )
      );
      event2.setProp("classNames", category);
      event2.setExtendedProp("description", eventDetails);
      $(".modal").modal("hide");
    });
}
function randomIDGenerate(length, chars) {
  var result = "";
  for (var i = length; i > 0; --i)
    result += chars[Math.round(Math.random() * (chars.length - 1))];
  return result;
}

function events() {
 
}