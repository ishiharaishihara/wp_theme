$(function()
{
    $.getJSON('<?php bloginfo('template_directory'); ?>//flower.json',function(data)
    {
        var len = data.length;
        var post = $('.posts')
        post.append('<div class="row"></div>');
            for(var i = 0; i < len; i++)
            {
                var k = (i+1)%4;
                if( k == 0)
                {
                    var post = $('.posts')
                    post.append('<div class="row"></div>');
                }
                var row = $('.row:last');
                row.append(
                        $('<figure/>')
                            .attr({'class':'col-sm-4'})
                            .append(
                                $('<img/>')
                                .attr({'src': data[i].img})
                                )
                            .append(
                                $('<figcaption/>')
                                .append('<h3>'+ data[i].title +'</h3>'+data[i].text)
                                )
                        );
            }
    });
});
