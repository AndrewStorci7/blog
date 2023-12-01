jQuery( document ).ready( ($) => {

    function escStr(s) {
        let ret = '';
        for (let i = 0; i < s.length; i++) {
            let charCode = s.charCodeAt(i);
            if (
                (charCode >= 48 && charCode <= 57) || // Numeri (da 0 a 9)
                (charCode >= 65 && charCode <= 90) || // Lettere maiuscole (da A a Z)
                (charCode >= 97 && charCode <= 122) || // Lettere minuscole (da a a z)
                charCode === 45 || // Simbolo '-'
                charCode === 124 || // Simbolo '|'
                charCode === 32 
            ) {
                ret += s[i];
            } else {
                ret += '&#x' + charCode.toString(16) + ';';
            }
        }
        return ret;
    }

    function splitPathName(a) {

        var indexes = [ "course", "year", "subject" ];
        var ret = {};
        for ( let i = 0; i < a.length; ++i ) {
            if ( i >= 2 ) {
                ret[indexes[i - 2]] = a[i];
            }
        }
        return ret;
    }

    $("#text-to-search").on( "input", () => {
        var args = splitPathName( window.location.pathname.split('/') );
        let esc_val = escStr($('#text-to-search').val());
        $.post(
            "/blog/src/search.php",
            { 
                'text-to-search': esc_val, 
                course: args.course, 
                year: args.year,
                subject: args.subject
            },
            (resp) => {
                $("#show-search-content").html(resp);
            }
        );
    });
});