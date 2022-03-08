$(document).ready( function(){

    $.ajax('https://netsport.eurosport.io/?extensions=%7B%22persistedQuery%22%3A%7B%22version%22%3A1%2C%22sha256Hash%22%3A%22a090e03e36f87e20da69bf0497d8d540e88a05c70f4dac71c4e103d38f1ad554%22%7D%7D&variables=%7B%22sportId%22%3A22%2C%22first%22%3A4%2C%22after%22%3A%22eyJsYXN0RW5kRGF0ZVBsYW5uZXIiOiIyMDIyLTAzLTA0VDEyOjE5OjQ3LjYwM1oiLCJwb3NpdGlvbiI6MywibGFzdE94eWdlblpvbmVJbmRleCI6MX0%3D%22%7D', {
        type: 'GET',  // http method
        headers: {
            'domain': 'www.eurosport.com'
        },
        success: function (data, status, xhr) {
            var popularNews = data.data.sportFeed.edges[0].node.cards[0].mostReadContents;
            var mostNews = data.data.sportFeed.edges[1].node.cards;
            $('.exploringNews .box').each(function(index) {
                $(this).children('.title1').html( popularNews[index].title.substring(0, 30).concat('...') );
                $(this).children('.readBtn').attr('title', popularNews[index].title );
                $(this).children('.title2').html( popularNews[index].seoTeaser.substring(0, 70).concat('...') );
                $(this).children('.readBtn').attr('detail', popularNews[index].seoTeaser );
                
                $(this).children('.readBtn').attr('imgexternalurl', popularNews[index].optionalPicture.url );
            })

            $('.popularNews .box').each(function(index) {
                $(this).children('.title1').html( mostNews[index].content.title.substring(0, 30).concat('...') );
                $(this).children('.readBtn').attr('title', mostNews[index].content.title );
                $(this).children('.title2').html( mostNews[index].content.seoTeaser.substring(0, 70).concat('...') );
                $(this).children('.readBtn').attr('detail', mostNews[index].content.seoTeaser );
                
                $(this).children('.readBtn').attr('imgexternalurl', mostNews[index].content.optionalPicture.url );
            })


            $('.newsImageBox').html("<div class='headlineBox'><a href='"+'/detail.php?story='+popularNews[0].optionalLink.url+"&imgUrl="+popularNews[0].optionalPicture.url+"&publishDate="+popularNews[0].publicationTime+"'><img src='"+popularNews[0].optionalPicture.url+"' width='100%'/></a><div class='headline'><p class='title1'>"+popularNews[0].title+"</p><button class='readBtn'>Read more -></button></div></div>  <div class='headlineBox'><a href='"+'/detail.php?story='+popularNews[1].optionalLink.url+"&imgUrl="+popularNews[1].optionalPicture.url+"&publishDate="+popularNews[1].publicationTime+"'><img src='"+ popularNews[1].optionalPicture.url+"' width='100%' /></a><div class='headline'><p class='title1'>"+popularNews[1].title+"</p><button class='readBtn'>Read more -></button></div></div>");


            $('.headlineBox').each(function(index) {
                $(this).on('click', function() {
                    location.href = '/detail.php?story='+popularNews[index].optionalLink.url+"&imgUrl="+popularNews[index].optionalPicture.url+"&publishDate="+popularNews[index].publicationTime;
                });
            });

            $('.exploringNews .box .readBtn').each(function(index) {
                $(this).on('click', function() {
                    location.href = '/detail.php?story='+popularNews[index].optionalLink.url+"&imgUrl="+popularNews[index].optionalPicture.url+"&publishDate="+popularNews[index].publicationTime;
                });
            });

            $('.popularNews .box .readBtn').each(function(index) {
                $(this).on('click', function() {
                    location.href = '/detail.php?story='+mostNews[index].content.optionalLink.url+"&imgUrl="+mostNews[index].content.optionalPicture.url+"&publishDate="+mostNews[index].content.publicationTime;
                });
            });
        },
        error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
        }
    });
});