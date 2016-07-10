$('[data-toggle="tooltip"]').tooltip();

$('[data-confirm="delete"]').confirm({
    confirm: function (element) {
        return element.parent().submit();
    },
    post   : true
});