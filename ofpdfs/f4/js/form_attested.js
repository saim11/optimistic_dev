
var IconTick = 'data: image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAATCAYAAAB7u5a2AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADpSURBVDhP3ZQtEoUgFIXZhct4kcgSiC8aXYJLIBpdgpFoJBqJRiORSDxP9M2IM/Izzli8M1A8891zjwDBg0UeZOOtcKOhlLpes80mGo / FSNRcQEbhBnYSoLSFivSJws3A0U5xcxuYEBBSgfXzpTAJFxvcYdHLuh91Aq + i8FvYJQN30B1D5d39IaVg3yTr3IXjf / kRxdrMupjn3X8W7kWHW58xAd2m0Og + AonfUgYPG + xgXxMEuQm3Y4NamtMpcDaIwY1o + ICz4nxoEtd / gawpKGNgF4tSjl7fzDx7 / QoEb324CkZPSR6N5QdImVqfbkGFCgAAAABJRU5ErkJggg ==';
var IconBlank = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAASCAYAAAC0EpUuAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACbSURBVDhP7ZQhDsMwDEVzo8HAwMEcIbBH2BEMB3eEwsDCwEIfYTBwsPBtB4gzVVOjglkys56+/W07Dgh3AJPB0KqUUtqptdtgW2nNpChkA5rlShBlM9BNaJ0jt7UnZkUud3QvVL5BnWCVmEr/0I5TH6P2zvS1TKTc2cVtYYozVoVxUU9y8vgQCI30PvJQa0sZfaY/fJrBD+VsSt/rn6Q5x3b2AQAAAABJRU5ErkJggg==';
var box1, box2, box3, box4, box5;
box1 = box2 = box3 = box4 = box5 = IconBlank;


let form_attestation = (formNumber = "", user_id = "", btn_id = "", date = "") => {
    // var date = date.split(" ");
    // var d = new Date(date[0]);
    // date = d.getDate()+"-"+(d.getMonth()+1)+"-"+d.getFullYear()+" "+date[1];

    var studentName = document.getElementById('studentName').value.toUpperCase();
    boxOne = document.getElementById('box1').checked;
    boxTwo = document.getElementById('box2').checked;
    boxThree = document.getElementById('box3').checked;
    boxFour = document.getElementById('box4').checked;
    boxFive = document.getElementById('box5').checked;
    boxSix = document.getElementById('box6').checked;
    boxSeven = document.getElementById('box7').checked;
    boxEight = document.getElementById('box8').checked;
    boxNine = document.getElementById('box9').checked;
    boxTen = document.getElementById('box10').checked;
    // ***********************************************
    boxOne ? box1 = IconTick : box1 = IconBlank;
    boxTwo ? box2 = IconTick : box2 = IconBlank;
    boxThree ? box3 = IconTick : box3 = IconBlank;
    boxFour ? box4 = IconTick : box4 = IconBlank;
    boxFive ? box5 = IconTick : box5 = IconBlank;
    boxSix ? box6 = IconTick : box6 = IconBlank;
    boxSeven ? box7 = IconTick : box7 = IconBlank;
    boxEight ? box8 = IconTick : box8 = IconBlank;
    boxNine ? box9 = IconTick : box9 = IconBlank;
    boxTen ? box10 = IconTick : box10 = IconBlank;
    var docDefinition = {
        // Footer Start
        footer: function () {
            return {
                columns: [
                    {
                        alignment: 'centered',
                        text: [
                            { text: ' Optimistic Future All Rights Reserved. Dated ', italics: true, fontSize: 8 },
                            { text: date, italics: true, fontSize: 8, bold: true },
                        ]
                    }
                ],
                margin: [160, 0]
            };
        },
        // Footer Closed
        margin: [0, 0, 0, 0],
        content:
            [
                {
                    table: {
                        widths: [341, 140],
                        body: [
                            [{ text: 'STUDENT INDUCTION FORM ', fontSize: 16, bold: true, alignment: "center", margin: [0, 20, 0, 0] },
                            {
                                image: 'data:image/png;base64,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',
                                width: 160,
                                height: 60,
                                alignment: 'center'
                            },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                },
                '\n',
                {
                    table: {
                        widths: [140, 340],
                        body: [
                            [{ text: 'Qualifications Name', margin: [0, 40, 0, 0], alignment: "center", bold: true, fillColor: "#808080", color: "white" },
                            {
                                table: {
                                    widths: [5, 300,],
                                    body: [
                                        [
                                            { image: box1, width: 17, height: 15, alignment: 'center' }, { text: 'CHC30113 CERTIFICATE III IN CHILDHOOD EDUCATION AND CARE', fontSize: 9 }
                                        ],
                                        [
                                            { image: box2, width: 17, height: 15, alignment: 'center' }, { text: 'CHC50113 DIPLOMA OF EARLY CHILDHOOD EDUCATION AND CARE', fontSize: 9 }
                                        ],
                                        [
                                            { image: box3, width: 17, height: 15, alignment: 'center' }, { text: 'CPP20212 CERTIFICATE II IN SECURITY OPERATIONS', fontSize: 9 }
                                        ],
                                        [
                                            { image: box4, width: 17, height: 15, alignment: 'center' }, { text: 'CPP20212 CERTIFICATE II IN SECURITY OPERATIONS(CONTROL ROMM OPERATOR)', fontSize: 9 }
                                        ],
                                        [
                                            { image: box5, width: 17, height: 15, alignment: 'center' }, { text: 'CPP30411 CERTIFICATE III IN SECURITY OPERATIONS', fontSize: 9 }
                                        ],
                                        [
                                            { image: box6, width: 17, height: 15, alignment: 'center' }, { text: 'CPP30411 CERTIFICATE III IN SECURITY OPERATIONS(BATTON AND HANDCUFFS)', fontSize: 9 }
                                        ],
                                        [
                                            { image: box7, width: 17, height: 15, alignment: 'center' }, { text: 'CHC33015 CERTIFICATE III IN INDIVIDUAL SUPPORT', fontSize: 9 }
                                        ],
                                        [
                                            { image: box8, width: 17, height: 15, alignment: 'center' }, { text: 'CHCSS00098 INDIVIDUAL SUPPORT - DISABILITY SKILL SET', fontSize: 9 }
                                        ],
                                        [
                                            { image: box9, width: 17, height: 15, alignment: 'center' }, { text: 'CPC40110 CERTIFICATE IV IN BUILDING AND CONSTRUCTION', fontSize: 9 }
                                        ],
                                        [
                                            { image: box10, width: 17, height: 15, alignment: 'center' }, { text: 'CPC50113 DIPLOMA OF BUILDING AND CONSTRUCTION', fontSize: 9 }
                                        ],


                                    ]
                                },
                                layout: {
                                    hLineColor: '#fff',
                                    vLineColor: '#fff',
                                    hLineColor: '#fff',
                                    vLineColor: '#fff',

                                },

                            },
                            ],
                            [{ text: 'Student Name', alignment: "center", bold: true, fillColor: "#808080", color: "white" },
                            { text: studentName, color: "blue", fontSize: 10, alignment: "center" }]
                        ]
                    }
                },
                '\n',
                {
                    style: 'paragraph',
                    text: 'I have attended an induction session, which included an outline of the relevant student information within the Student Handbook.'
                },
                {
                    style: 'paragraph',
                    margin: [0, 3, 0, 0],
                    text: 'I declare that I understand my rights and responsibilities as a student with the RTO and that I have been advised how to access the relevant handbooks, resources, policies and procedures within the organisation.'
                },
                "\n",
                {
                    table: {
                        style: "paragraph",
                        widths: [50, 260, 50, 100],
                        body: [
                            [
                                {
                                    text: 'Signed: ',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: '',
                                    border: [false, false, false, true]
                                },
                                {
                                    text: 'Date: ',
                                    border: [false, false, false, false]
                                },
                                {
                                    text: '',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },
                '\n',
                {
                    table: {
                        style: "paragraph",
                        widths: [500],
                        body: [
                            [
                                {
                                    text: '',
                                    border: [false, false, false, true]
                                },
                            ],
                        ]
                    },
                },
                "\n",

                { text: 'I have attended a Student Induction presentation, which outlined the following:\n', style: "paragraph", },
                {
                    margin: [8, 0, 0, 0],
                    style: "paragraph",
                    ul: [
                        'Organisational Profile',
                        'Mission Statement',
                        'Organisational Structure',
                        'Scope of Registration',
                        'Course outline detailing information regarding my course of enrolment',
                        "Information regarding the RTO's responsibility",
                        'Information regarding National Recognition',
                        'Recognition of Prior Learning',
                        'Student Handbook',
                        "Support Services",
                        'Attendance Procedures',
                        'Types of Assessments',
                        "My Trainer's Responsibilities",
                        "My rights and responsibilities",
                        'How to provide feedback',
                        'The facilities available',
                        'Evacuation Procedure',
                        'Smoking Policy',
                        'Housekeeping',
                        'Continual Improvement',
                        'When Certificates will be issued',
                    ]
                },
                "\n",
                {
                    table: {
                        style: "paragraph",
                        widths: [500],
                        body: [
                            [
                                {
                                    text: 'OFFICE USE ONLY', alignment: 'center', fillColor: "#51bc60",
                                    border: [true, true, true, true]
                                },
                            ],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 5; },
                        paddingBottom: function (i, node) { return 5; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                },
                {
                    table: {
                        style: "paragraph",
                        widths: [160, 160, 162],
                        body: [
                            [{ text: 'Induction delivered by:', fillColor: "#e6e6e6", },
                            { text: 'Signed:', fillColor: "#e6e6e6", },
                            { text: 'Date:', fillColor: "#e6e6e6", }],
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 1; },
                        paddingBottom: function (i, node) { return 40; },
                        hLineColor: '#4f6228',
                        vLineColor: '#4f6228',
                    }
                }
            ],

        styles: {
            header: {
                fontSize: 11,
                bold: true,
            },
            paragraph: {
                fontSize: 8
            },
            subParagraph: {
                fontSize: 7
            }
        }
        , layout: {
            // paddingLeft: function(i, node) { return 14; },
            // paddingRight: function(i, node) { return 4; },
            paddingTop: function (i, node) { return 0; },
            paddingBottom: function (i, node) { return 0; },
            // fillColor: function (i, node) { return null; }
        },
    };
    if (btn_id == 'approve') {
        pdfMake.createPdf(docDefinition).getBase64(function (encodedString) {
            pdf = encodedString;
            $.ajax({
                method: "POST",
                url: "http://dev.softkodes.com/optimisticfuture/formEmail/forms_attestation",
                data: {
                    form: formNumber,
                    user: user_id,
                    form4: pdf
                },
            }).done(function (data) {
                console.log(data)
            }).error((err) => {
                console.log(err);
            });
        });
    }
    else if (btn_id == 'download') {
        // download the PDF
        pdfMake.createPdf(docDefinition).download('STUDENT_INDUCTION_FORM.pdf');
        // pdfMake.createPdf(docDefinition).open();
    }
}