var autocompleteOptions = {
    minLength: 3,
    source: function (request, response) {
        $.ajax({
            type: "POST",
            url: "/echo/json/",
            data: {
                json: '["ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure", "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java", "JavaScript", "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme"]',
                delay: 1
            },
            success: function (data) {
                response(data);
            }
        });
    }
};

$("input.searchInput").autocomplete(autocompleteOptions);