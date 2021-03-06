$(document).ready( function(){

    $.ajax('https://netsport.eurosport.io/?extensions=%7B%22persistedQuery%22%3A%7B%22version%22%3A1%2C%22sha256Hash%22%3A%22a090e03e36f87e20da69bf0497d8d540e88a05c70f4dac71c4e103d38f1ad554%22%7D%7D&variables=%7B%22sportId%22%3A22%2C%22first%22%3A4%2C%22after%22%3A%22eyJsYXN0RW5kRGF0ZVBsYW5uZXIiOiIyMDIyLTAzLTIwVDExOjE1OjAzLjk2M1oiLCJwb3NpdGlvbiI6MywibGFzdE94eWdlblpvbmVJbmRleCI6MX0%3D%22%7D', {
        type: 'GET',  // http method
        headers: {
            'domain': 'www.eurosport.com'
        },
        success: function (data, status, xhr) {
            var popularNews = data.data.sportFeed.edges[0].node.cards[0].mostReadContents;
            // var mostNews = data.data.sportFeed.edges[1].node.cards;

            var news = data.data.sportFeed;
            $('.row .col-md-4 .box').each(function(index) {
                if (index < 6) {
                    $(this).children('div').html("<a href='"+'/detail.php?story='+popularNews[index].optionalLink.url+"&imgUrl="+popularNews[index].optionalPicture.url+"&publishDate="+popularNews[index].publicationTime+"'><img src="+popularNews[index].optionalPicture.url+" width='100%' /></a>");
                    $(this).children('.title1').html( popularNews[index].publicationTime );
                    $(this).children('.title3').html( popularNews[index].title );
                    $(this).children('.title4').html( popularNews[index].seoTeaser );
                } else {
                    $(this).children('div').html("<a href='"+'/detail.php?story='+news.edges[2].node.cards[index-6].content.optionalLink.url+"&imgUrl="+news.edges[2].node.cards[index-6].content.optionalPicture.url+"&publishDate="+news.edges[1].node.cards[index-6].content.publicationTime+"'><img src="+news.edges[2].node.cards[index-6].content.optionalPicture.url+" width='100%' /></a>");
                    $(this).children('.title1').html( news.edges[2].node.cards[index-6].content.publicationTime );
                    $(this).children('.title3').html( news.edges[2].node.cards[index-6].content.title );
                    $(this).children('.title4').html( news.edges[2].node.cards[index-6].content.seoTeaser );
                }
            })
        },
        error: function (jqXhr, textStatus, errorMessage) {
                console.log(errorMessage);
        }
    });
});