$(document).ready( function(){

    $.ajax('/git%20footballl/footballnews/php_scraper/detail_scrap.php', {
        type: 'POST',
        data: {
            story: $("#storyValue").val()
        },
        success: function (html, status, xhr) {
            $('.news_body .panel2').each(function(index) {
                $(this).children('.title1').html( JSON.parse(html).title );
                $(this).children('.title_detail').html( JSON.parse(html).desc );
                $(this).children('.title_alt').html( JSON.parse(html).alt );
            })
        },
        error: function (jqXhr, textStatus, errorMessage) {
            console.log(errorMessage);
        }
    });
});