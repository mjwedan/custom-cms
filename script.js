$(document).ready(function () {
    $("button").click(function(){
     new List ('sortable-blog-list', options);
    })
});

var options = {
    valueNames: [ 'title' ]
};