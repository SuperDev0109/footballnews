$(document).ready( function(){

    $.ajax('https://netsport.eurosport.io/?extensions=%7B%22persistedQuery%22%3A%7B%22version%22%3A1%2C%22sha256Hash%22%3A%22a090e03e36f87e20da69bf0497d8d540e88a05c70f4dac71c4e103d38f1ad554%22%7D%7D&variables=%7B%22sportId%22%3A22%2C%22first%22%3A4%2C%22after%22%3A%22eyJsYXN0RW5kRGF0ZVBsYW5uZXIiOiIyMDIyLTAzLTA0VDEyOjE5OjQ3LjYwM1oiLCJwb3NpdGlvbiI6MywibGFzdE94eWdlblpvbmVJbmRleCI6MX0%3D%22%7D', {
        type: 'GET',  // http method
        headers: {
            'domain': 'www.eurosport.com'
        },
        success: function (data, status, xhr) {
            var popularNews = data.data.sportFeed.edges[0].node.cards[0].mostReadContents;
            $('.exploringNews .box').each(function(index) {
                $(this).children('.title1').html( popularNews[index].title.substring(0, 30).concat('...') );
                $(this).children('.readBtn').attr('title', popularNews[index].title );
                $(this).children('.title2').html( popularNews[index].seoTeaser.substring(0, 70).concat('...') );
                $(this).children('.readBtn').attr('detail', popularNews[index].seoTeaser );
                
                $(this).children('.readBtn').attr('imgexternalurl', popularNews[index].optionalPicture.url );
            })

            $('.popularNews .box').each(function(index) {
                $(this).children('.title1').html( popularNews[index+3].title.substring(0, 30).concat('...') );
                $(this).children('.readBtn').attr('title', popularNews[index+3].title );
                $(this).children('.title2').html( popularNews[index+3].seoTeaser.substring(0, 70).concat('...') );
                $(this).children('.readBtn').attr('detail', popularNews[index+3].seoTeaser );
                
                $(this).children('.readBtn').attr('imgexternalurl', popularNews[index+3].optionalPicture.url );
            })


            $('.newsImageBox').html("<div class='headlineBox'><a href='"+'/detail.php?story='+popularNews[0].optionalLink.url+"&imgUrl="+popularNews[0].optionalPicture.url+"&publishDate="+popularNews[0].publicationTime+"'><img src='"+popularNews[0].optionalPicture.url+"' width='100%'/></a><div class='headline'><p class='title1'>"+popularNews[0].title+"</p><button class='readBtn'>Read more -></button></div></div>  <div class='headlineBox'><a href='"+'/detail.php?story='+popularNews[1].optionalLink.url+"&imgUrl="+popularNews[1].optionalPicture.url+"&publishDate="+popularNews[1].publicationTime+"'><img src='"+ popularNews[1].optionalPicture.url+"' width='100%' /></a><div class='headline'><p class='title1'>"+popularNews[1].title+"</p><button class='readBtn'>Read more -></button></div></div>");


            $('.headlineBox').each(function(index) {
                $(this).on('click', function() {
                    location.href = '/detail.php?story='+popularNews[index].optionalLink.url+"&imgUrl="+popularNews[index].optionalPicture.url+"&publishDate="+popularNews[index].publicationTime;
                });
            });
        },
        error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
        }
    });

    $('.box .readBtn').each(function() {
        $(this).on('click', function() {
            $("#news_title").text($(this).attr("title"));
            $("#news_detail").html($(this).attr("detail"));
            // $("#news_src").html($(this).attr("detail"));
            $("#news_src").html("<img src="+$(this).attr("imgexternalurl")+" width='100%' />");
            $("#detailModal").modal();
        });
    });
});