YUI(M.yui.loader).use('node', function(Y) {
    Y.on('domready', function() {
        var node = Y.one('.userprofile');
        if (node) {
            var html = '<div class="local_coursemail_sendmessage">'
                + '<form action="' + M.cfg.wwwroot + '/local/coursemail/create.php" method="post">'
                + '<input type="hidden" name="c" value="' + M.local_mail.course +'" />'
                + '<input type="hidden" name="r" value="' + M.local_mail.recipient +'" />'
                + '<input type="hidden" name="sesskey" value="' + M.cfg.sesskey +'" />'
                + '<input type="submit" value="' + M.util.get_string('sendmessage', 'local_coursemail') + '" />'
                + '</form>'
                + '</div>';
            var form = Y.Node.create(html);
            node.append(form);
        }
    });
});
