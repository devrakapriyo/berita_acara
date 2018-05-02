var document;
var $;
var tinymce;


$(document)
    .ready(function () {
        var d = new Date();
        var n = d.getDate();
        var m = d.getMonth();
        var y = d.getFullYear();

        $('.collapsible').collapsible({
            accordion : true // A setting that changes the collapsible behavior to expandable instead of the default accordion style
        });

        $('.generate').val(Math.floor((Math.random() * 1000000) + 1) + '-' + n + '-' + m + '-' + y);
        $('.generate2').val(Math.floor((Math.random() * 1000000) + 2) + '/' + n + '/' + m + '/' + y);

        $('.datepicker').pickadate({
            selectMonths: true,
            selectYears: 15
        });

        $('.generate3').val(Math.floor((Math.random() * 1000000) + 2) + '/' + n + '/' + m + '/' + y);

        $('.input-tiga').click(function () {
            var
                $console = $('.callback .console');
            var d = new Date();
            var n = d.getDate();
            var m = d.getMonth();
            var y = d.getFullYear();
            $('.ui.small.modal').modal('show');
            $('.generate').text(Math.floor(Math.random() * 6) + 1 + 6 + 7);
            $('.nolama').val($('.input-nota').val());
            $('.tagihan').val($('.input-tagihan').val());
            $('.ui.toggle.checkbox.checked').checkbox().first().checkbox({
                onUnchecked: function () {
                    $console.append('onUnchecked called<br>');
                }
            });
            $('.generate').val(Math.floor((Math.random() * 1000000) + 1) + '/' + n + '/' + m + '/' + y);
            $('.generate2').val(Math.floor((Math.random() * 1000000) + 2) + '/' + n + '/' + m + '/' + y);
            $('.jenis-nota').val($('.ui.toggle.checkbox.checked').text().trim());
            $('.header.jenis-nota').html($('.ui.toggle.checkbox.checked').text().trim());
            console.log($('.ui.toggle.checkbox.checked').text());
        });

        if ($('.KONFIRMASI').val() === 'KONFIRMASI') {
            $('.KONFIRMASI').css('background-color', '#e3f2fd');
            $('.KONFIRMASI').css('color', '#424242');
            $('.KONFIRMASI').removeClass('allow');
            $('.KONFIRMASI').addClass('matikan');
            $('.allow2').removeClass('matikan');
        }
        if ($('.FAILED').val() === 'FAILED') {
            $('.FAILED').css('background-color', '#ffcdd2');
            $('.FAILED').css('color', '#424242');
            $('.FAILED').addClass('matikan');
            $('.allow').removeClass('matikan');
        }
        if ($('.NEW').val() === 'NEW') {
            $('.NEW').addClass('matikan');
            $('.allow').removeClass('matikan');
        }
        /*TinyMce Configuration*/
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste",
                "textpattern",
                "nonbreaking",
                "pagebreak"
            ],
            toolbar: "nonbreaking",
            fontsize_formats: "8pt 10pt 12pt 14pt 16pt 18pt 20pt 24pt 36pt 42pt",
            pagebreak_separator: "<!-- my page break -->",
            nonbreaking_force_tab: true,
            textpattern_patterns: [
                {
                    start: '*',
                    end: '*',
                    format: 'italic'
                },
                {
                    start: '**',
                    end: '**',
                    format: 'bold'
                },
                {
                    start: '#',
                    format: 'h1'
                },
                {
                    start: '##',
                    format: 'h2'
                },
                {
                    start: '###',
                    format: 'h3'
                },
                {
                    start: '####',
                    format: 'h4'
                },
                {
                    start: '#####',
                    format: 'h5'
                },
                {
                    start: '######',
                    format: 'h6'
                },
                {
                    start: '1. ',
                    cmd: 'InsertOrderedList'
                },
                {
                    start: '* ',
                    cmd: 'InsertUnorderedList'
                },
                {
                    start: '- ',
                    cmd: 'InsertUnorderedList'
                }
            ],
            style_formats: [
                {
                    title: "Headers",
                    items: [
                        {
                            title: "Header 1",
                            format: "h1"
                        },
                        {
                            title: "Header 2",
                            format: "h2"
                        },
                        {
                            title: "Header 3",
                            format: "h3"
                        },
                        {
                            title: "Header 4",
                            format: "h4"
                        },
                        {
                            title: "Header 5",
                            format: "h5"
                        },
                        {
                            title: "Header 6",
                            format: "h6"
                        }
                ]
                },
                {
                    title: "Inline",
                    items: [
                        {
                            title: "Bold",
                            icon: "bold",
                            format: "bold"
                        },
                        {
                            title: "Italic",
                            icon: "italic",
                            format: "italic"
                        },
                        {
                            title: "Underline",
                            icon: "underline",
                            format: "underline"
                        },
                        {
                            title: "Strikethrough",
                            icon: "strikethrough",
                            format: "strikethrough"
                        },
                        {
                            title: "Superscript",
                            icon: "superscript",
                            format: "superscript"
                        },
                        {
                            title: "Subscript",
                            icon: "subscript",
                            format: "subscript"
                        },
                        {
                            title: "Code",
                            icon: "code",
                            format: "code"
                        }
                ]
                },
                {
                    title: "Blocks",
                    items: [
                        {
                            title: "Paragraph",
                            format: "p"
                        },
                        {
                            title: "Blockquote",
                            format: "blockquote"
                        },
                        {
                            title: "Div",
                            format: "div"
                        },
                        {
                            title: "Pre",
                            format: "pre"
                        }
                ]
                },
                {
                    title: "Alignment",
                    items: [
                        {
                            title: "Left",
                            icon: "alignleft",
                            format: "alignleft"
                        },
                        {
                            title: "Center",
                            icon: "aligncenter",
                            format: "aligncenter"
                        },
                        {
                            title: "Right",
                            icon: "alignright",
                            format: "alignright"
                        },
                        {
                            title: "Justify",
                            icon: "alignjustify",
                            format: "alignjustify"
                        }
                ]
                },
                {
                    title: "Line Spacing",
                    items: [
                        {
                            title: '0.5',
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0.5em"
                            }
                        },
                        {
                            title: '1',
                            selector: 'p',
                            inline: 'p',
                            styles: {
                                margin: "1em"
                            }
                        },
                        {
                            title: '1.5',
                            selector: 'p',
                            inline: 'p',
                            styles: {
                                margin: "1.5em"
                            }
                        },
                        {
                            title: '2',
                            selector: 'p',
                            inline: 'p',
                            styles: {
                                margin: "2em"
                            }
                        },
                        {
                            title: 'Remove',
                            selector: 'p',
                            inline: 'p',
                            styles: {
                                margin: "0px"
                            }
                        }
                ]
                },
                {
                    title: "margin",
                    items: [
                        {
                            title: "Top 0.5",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0.5em 0em 0em 0em"
                            }
                        },
                        {
                            title: "Top 1",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "1em 0em 0em 0em"
                            }
                        },
                        {
                            title: "Top 1.5",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "1.5em 0em 0em 0em"
                            }
                        },
                        {
                            title: "Top 2",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "2em 0em 0em 0em"
                            }
                        },

                        {
                            title: "Right 0.5",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 0.5em 0em 0em"
                            }
                        },
                        {
                            title: "Right 1",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 1em 0em 0em"
                            }
                        },
                        {
                            title: "Right 1.5",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 1.5em 0em 0em"
                            }
                        },
                        {
                            title: "Right 2",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 2em 0em 0em"
                            }
                        },

                        {
                            title: "Bottom 0.5",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 0em 0.5em 0em"
                            }
                        },
                        {
                            title: "Bottom 1",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 0em 0em 1em"
                            }
                        },
                        {
                            title: "Bottom 1.5",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 0em 1.5em 0em"
                            }
                        },
                        {
                            title: "Bottom 2",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 0em 2em 0em"
                            }
                        },

                        {
                            title: "Left 0.5",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 0em 0em 0.5em"
                            }
                        },
                        {
                            title: "Left 1",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 0em 0em 1em"
                            }
                        },
                        {
                            title: "Left 1.5",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 0em 0em 1.5em"
                            }
                        },
                        {
                            title: "Left 2",
                            selector: 'p',
                            selector: 'li',
                            inline: 'p',
                            styles: {
                                margin: "0em 0em 0em 2em"
                            }
                        },
                ]
                }
            ],
            fix_list_elements: true,
            height: 500,
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fontsizeselect"
        });
    });

function addtable() {

    var table = document.getElementById("addtable");
    var row = table.insertRow(2);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    cell1.innerHTML = "<div class='input-field'><input placeholder='Customer' id='first_name' type='text' class='validate paste-generate1' name='customer[]' required><input type='hidden' name='surat_kuasa[]' value='Ada'>" + "</div>";
    cell2.innerHTML = "<div class='input-field'><input placeholder='No Pengajuan' id='first_name' type='text' class='validate generate paste-generate blue-text' name='no_pengajuan[]' value='' required>" + "</div>";
    cell3.innerHTML = "<div class='input-field'><input placeholder='No Permohonan' id='first_name' type='text' class='validate paste-generate2 pink-text' name='no_permohonan[]' required>" + "</div>";
    cell4.innerHTML = "<div class='input-field'><input placeholder='Nota Lama' id='first_name' type='text' class='validate' name='nota_lama[]' required>" + "</div>";
    cell5.innerHTML = "<div class='input-field'><input placeholder='Rp.' id='first_name' type='text' class='validate green-text' name='tagihan[]' required>" + "</div>";
    cell6.innerHTML = "<div class='input-field'><input placeholder='No Request' id='first_name' type='text' class='validate' name='no_req[]' required>" + "</div>";
    cell7.innerHTML = "<div class='input-field'><select class='browser-default' name='jenis_nota[]'><option value='' disabled selected>Jenis Nota<option value='Kapal'>Kapal<option value='Barang'>Barang<option value='Peti kemas'>Peti Kemas<option value='Lainnya'>Lainnya" + "</div>";
    cell8.innerHTML = "<div class='input-field'><select class='browser-default' name='to[]'><option value='' disabled selected>TO<option value='TO 1'>TO 1<option value='TO 2'>TO 2<option value='TO 3'>TO 3<option value='VAS' required>VAS" + "</select></div>";

}

function copygenerate() {
    $('.paste-generate').val($('.copy-generate').val());
    $('.paste-generate1').val($('.copy-generate1').val());
    $('.paste-generate2').val($('.copy-generate2').val());
    $('.paste-generate3').val($('.copy-generate3').val());
    $('.paste-generate4').val($('.copy-generate4').val());
}

$(document).ready(function () {
    setInterval(function () {
        $(".autoload").load('monitoring-load')
    }, 2000);
    setInterval(function () {
        $(".ajaxload").load('prosesba-load')
    }, 2000);
});