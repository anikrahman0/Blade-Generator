function stopHandler(event, obj) {
    var elem = obj.item[0];
    var sampleSortableGroup = $(".js-sortable-group").first().clone().html("");

    var idCount = 1;
    $(".menu_list .alert_box").each(function () {
        $(this).attr("id", "m_" + idCount);
        idCount++;
    });
}

$(".js-sortable-parent").sortable().disableSelection();

var sortableGroup = $(".js-sortable-group")
    .sortable({
        connectWith: ".js-drop-target",

        stop: stopHandler,
    })
    .disableSelection();