

$('body').on('click', '.tree .tree-branch label', function() {
    var $treeBranch = $(this).parent();
    $treeBranch.toggleClass('tree-open');
});