function changePage(obj, e) {
    e.preventDefault();
    let page = $(obj).attr('href').split('page=')[1];
    $.ajax({
        url : table+'?page='+page
    }).done(function (response) {
        $('#content').html(response);
        location.hash = page;
        $('html, body').animate({
            scrollTop: $("#top").offset().top
        }, 250)
    })
}

var currentUrl = table;

function loadTable(e, doSearch) {
    e.preventDefault();
    var param = $('#search').val();
    if (doSearch && param !== "")
        currentUrl = search+param+'/';
    else
        currentUrl = table;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url : currentUrl,
        method : 'get'
    }).done(function (response) {
        currentUrl = search;
        $('#content').html(response);
        if (doSearch)
            location.hash = $('#search').val();
    })
}