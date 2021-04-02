const ps = new PerfectScrollbar("#sidebar-links-body", {
  wheelSpeed: 2,
  wheelPropagation: true,
  minScrollbarLength: 20,
});

$(document).ready(function () {
  $(".makeDatatable").each(function (_, dTable) {
    $(dTable).DataTable({
      dom: "Bfrtip",
      lengthChange: false,
      buttons: ["copy", "csv", "excel", "pdf", "print"],
    });
  });

  $(window).resize(function () {
    ps.update();
  });
});
