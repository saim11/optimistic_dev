
var s = ""
// let hello = () => {
//     console.log(document.getElementById('test').value);
//     s = document.getElementById('test').value;
//     pdfMake.createPdf(docDefinition).open();
// }
var l = `Hello ${s} how are you??`;
var IconTick = 'data: image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAATCAYAAAB7u5a2AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADpSURBVDhP3ZQtEoUgFIXZhct4kcgSiC8aXYJLIBpdgpFoJBqJRiORSDxP9M2IM/Izzli8M1A8891zjwDBg0UeZOOtcKOhlLpes80mGo / FSNRcQEbhBnYSoLSFivSJws3A0U5xcxuYEBBSgfXzpTAJFxvcYdHLuh91Aq + i8FvYJQN30B1D5d39IaVg3yTr3IXjf / kRxdrMupjn3X8W7kWHW58xAd2m0Og + AonfUgYPG + xgXxMEuQm3Y4NamtMpcDaIwY1o + ICz4nxoEtd / gawpKGNgF4tSjl7fzDx7 / QoEb324CkZPSR6N5QdImVqfbkGFCgAAAABJRU5ErkJggg =='
var IconBlank = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAASCAYAAAC0EpUuAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAACbSURBVDhP7ZQhDsMwDEVzo8HAwMEcIbBH2BEMB3eEwsDCwEIfYTBwsPBtB4gzVVOjglkys56+/W07Dgh3AJPB0KqUUtqptdtgW2nNpChkA5rlShBlM9BNaJ0jt7UnZkUud3QvVL5BnWCVmEr/0I5TH6P2zvS1TKTc2cVtYYozVoVxUU9y8vgQCI30PvJQa0sZfaY/fJrBD+VsSt/rn6Q5x3b2AQAAAABJRU5ErkJggg=='
var box1, box2, box3, box4, box5, box6, box7, box8, box9, box10, box11, box12, box13, box14, box15, box16;
box1 = box2 = box3 = box4 = box5 = box6 = box7 = box8 = box9 = box10 = box11 = box12 = box13 = box14 = box15 = box16 = IconBlank;


let form_attestation = (formNumber = "", user_id = "", btn_id = "", pdfDate = "") => {
    var pdfDate = pdfDate.split(" ");
    var d = new Date(pdfDate[0]);
    pdfDate = d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + " " + pdfDate[1];
    // console.log(document.getElementById('test').value);
    one = document.getElementById('one').value.toUpperCase();
    two = document.getElementById('two').value.toUpperCase();
    three = document.getElementById('three').value.toUpperCase();
    four = document.getElementById('four').value.toUpperCase();
    five = document.getElementById('five').value.toUpperCase();
    six = document.getElementById('six').value.toUpperCase();
    seven = document.getElementById('seven').value.toUpperCase();
    eight = document.getElementById('eight').value.toUpperCase();
    nine = document.getElementById('nine').value.toUpperCase();
    ten = document.getElementById('ten').value.toUpperCase();
    eleven = document.getElementById('eleven').value.toUpperCase();
    twelve = document.getElementById('twelve').value.toUpperCase();
    thirteen = document.getElementById('thirteen').value.toUpperCase();
    fourteen = document.getElementById('fourteen').value.toUpperCase();
    fifteen = document.getElementById('fifteen').value.toUpperCase();
    sixteen = document.getElementById('sixteen').value.toUpperCase();
    seventeen = document.getElementById('seventeen').value.toUpperCase();
    eighteen = document.getElementById('eighteen').value.toUpperCase();
    ninteen = document.getElementById('ninteen').value.toUpperCase();
    twenty = document.getElementById('twenty').value.toUpperCase();
    twentyOne = document.getElementById('twentyOne').value.toUpperCase();
    twentyTwo = document.getElementById('twentyTwo').value.toUpperCase();
    twentyThree = document.getElementById('twentyThree').value.toUpperCase();
    twentyFour = document.getElementById('twentyFour').value.toUpperCase();
    twentyFive = document.getElementById('twentyFive').value.toUpperCase();
    twentySix = document.getElementById('twentySix').value.toUpperCase();
    twentySeven = document.getElementById('twentySeven').value.toUpperCase();
    twentyEight = document.getElementById('twentyEight').value.toUpperCase();
    twentyNine = document.getElementById('twentyNine').value.toUpperCase();
    thirty = document.getElementById('thirty').value.toUpperCase();
    thirtyOne = document.getElementById('thirtyOne').value.toUpperCase();
    thiryTwo = document.getElementById('thiryTwo').value.toUpperCase();
    thirtyThree = document.getElementById('thirtyThree').value.toUpperCase();
    thirtyFour = document.getElementById('thirtyFour').value.toUpperCase();
    thirtyFive = document.getElementById('thirtyFive').value.toUpperCase();
    thirtySix = document.getElementById('thirtySix').value.toUpperCase();
    thirtySeven = document.getElementById('thirtySeven').value.toUpperCase();
    thirtyEight = document.getElementById('thirtyEight').value.toUpperCase();
    thirtyNine = document.getElementById('thirtyNine').value.toUpperCase();
    fourty = document.getElementById('fourty').value.toUpperCase();
    fortyOne = document.getElementById('fortyOne').value.toUpperCase();
    fortyTwo = document.getElementById('fortyTwo').value.toUpperCase();
    fortyThree = document.getElementById('fortyThree').value.toUpperCase();
    fortyFour = document.getElementById('fortyFour').value.toUpperCase();
    fortyFive = document.getElementById('fortyFive').value.toUpperCase();
    fortySix = document.getElementById('fortySix').value.toUpperCase();
    fortySeven = document.getElementById('fortySeven').value.toUpperCase();
    fortyEight = document.getElementById('fortyEight').value.toUpperCase();
    fortyNine = document.getElementById('fortyNine').value.toUpperCase();
    fifty = document.getElementById('fifty').value.toUpperCase();
    fiftyOne = document.getElementById('fiftyOne').value.toUpperCase();
    fiftyTwo = document.getElementById('fiftyTwo').value.toUpperCase();
    fiftyThree = document.getElementById('fiftyThree').value.toUpperCase();
    fiftyFour = document.getElementById('fiftyFour').value.toUpperCase();
    fiftyFive = document.getElementById('fiftyFive').value.toUpperCase();
    fiftySix = document.getElementById('fiftySix').value.toUpperCase();
    fiftySeven = document.getElementById('fiftySeven').value.toUpperCase();
    fiftyEight = document.getElementById('fiftyEight').value.toUpperCase();
    fiftyNine = document.getElementById('fiftyNine').value.toUpperCase();
    sixty = document.getElementById('sixty').value.toUpperCase();
    sixtyOne = document.getElementById('sixtyOne').value.toUpperCase();
    sixtyTwo = document.getElementById('sixtyTwo').value.toUpperCase();
    sixtyThree = document.getElementById('sixtyThree').value.toUpperCase();
    sixtyFour = document.getElementById('sixtyFour').value.toUpperCase();
    sixtyFive = document.getElementById('sixtyFive').value.toUpperCase();
    sixtySix = document.getElementById('sixtySix').value.toUpperCase();
    sixtySeven = document.getElementById('sixtySeven').value.toUpperCase();
    sixtyEight = document.getElementById('sixtyEight').value.toUpperCase();
    sixtyNine = document.getElementById('sixtyNine').value.toUpperCase();
    seventy = document.getElementById('seventy').value.toUpperCase();
    seventyOne = document.getElementById('seventyOne').value.toUpperCase();
    seventyTwo = document.getElementById('seventyTwo').value.toUpperCase();
    seventyThree = document.getElementById('seventyThree').value.toUpperCase();
    seventyFour = document.getElementById('seventyFour').value.toUpperCase();
    seventyFive = document.getElementById('seventyFive').value.toUpperCase();
    seventySix = document.getElementById('seventySix').value.toUpperCase();
    seventySeven = document.getElementById('seventySeven').value.toUpperCase();
    seventyEight = document.getElementById('seventyEight').value.toUpperCase();
    seventyNine = document.getElementById('seventyNine').value.toUpperCase();
    eighty = document.getElementById('eighty').value.toUpperCase();
    eightyOne = document.getElementById('eightyOne').value.toUpperCase();
    eightyTwo = document.getElementById('eightyTwo').value.toUpperCase();
    eightyThree = document.getElementById('eightyThree').value.toUpperCase();
    eightyFour = document.getElementById('eightyFour').value.toUpperCase();
    eightyFive = document.getElementById('eightyFive').value.toUpperCase();
    eightySix = document.getElementById('eightySix').value.toUpperCase();
    eightySeven = document.getElementById('eightySeven').value.toUpperCase();
    eightyEight = document.getElementById('eightyEight').value.toUpperCase();
    eightyNine = document.getElementById('eightyNine').value.toUpperCase();
    ninty = document.getElementById('ninty').value.toUpperCase();
    nintyOne = document.getElementById('nintyOne').value.toUpperCase();
    nintyTwo = document.getElementById('nintyTwo').value.toUpperCase();
    nintyThree = document.getElementById('nintyThree').value.toUpperCase();
    nintyFour = document.getElementById('nintyFour').value.toUpperCase();
    nintyFive = document.getElementById('nintyFive').value.toUpperCase();
    nintySix = document.getElementById('nintySix').value.toUpperCase();
    nintySeven = document.getElementById('nintySeven').value;
    nintyEight = document.getElementById('nintyEight').value;
    nintyNine = document.getElementById('nintyNine').value;
    hundred = document.getElementById('hundred').value;
    hundredOne = document.getElementById('hundredOne').value;
    hundredTwo = document.getElementById('hundredTwo').value;
    hundredThree = document.getElementById('hundredThree').value;
    hundredFour = document.getElementById('hundredFour').value;
    hundredFive = document.getElementById('hundredFive').value;
    hundredSix = document.getElementById('hundredSix').value;
    hundredSeven = document.getElementById('hundredSeven').value;
    hundredEight = document.getElementById('hundredEight').value;
    hundredNine = document.getElementById('hundredNine').value;
    hundredTen = document.getElementById('hundredTen').value;
    hundredEleven = document.getElementById('hundredEleven').value;
    hundredTwelve = document.getElementById('hundredTwelve').value;
    hundredThirteen = document.getElementById('hundredThirteen').value;
    hundredForteen = document.getElementById('hundredForteen').value;
    hundredFifteen = document.getElementById('hundredFifteen').value;
    hundredSixteen = document.getElementById('hundredSixteen').value;
    hundredSeventeen = document.getElementById('hundredSeventeen').value;
    hundredEighteen = document.getElementById('hundredEighteen').value;
    hundredNinteen = document.getElementById('hundredNinteen').value;
    hundredTwenty = document.getElementById('hundredTwenty').value;
    hundredTwentyOne = document.getElementById('hundredTwentyOne').value.toUpperCase();
    hundredTwentyTwo = document.getElementById('hundredTwentyTwo').value.toUpperCase();
    hundredTwentyThree = document.getElementById('hundredTwentyThree').value.toUpperCase();
    hundredTwentyFour = document.getElementById('hundredTwentyFour').value.toUpperCase();
    hundredTwentyFive = document.getElementById('hundredTwentyFive').value.toUpperCase();
    hundredTwentySix = document.getElementById('hundredTwentySix').value.toUpperCase();
    hundredTwentySeven = document.getElementById('hundredTwentySeven').value.toUpperCase();
    hundredTwentyEight = document.getElementById('hundredTwentyEight').value.toUpperCase();
    hundredTwentyNine = document.getElementById('hundredTwentyNine').value.toUpperCase();
    hundredThirty = document.getElementById('hundredThirty').value.toUpperCase();
    hundredThirtyOne = document.getElementById('hundredThirtyOne').value.toUpperCase();
    hundredThirtyTwo = document.getElementById('hundredThirtyTwo').value.toUpperCase();
    studentName = document.getElementById('studentName').value.toUpperCase();
    date = document.getElementById('date').value.toUpperCase();

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
    boxEleven = document.getElementById('box11').checked;
    boxTwelve = document.getElementById('box12').checked;
    boxThirteen = document.getElementById('box13').checked;
    boxForteen = document.getElementById('box14').checked;

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
    boxEleven ? box11 = IconTick : box11 = IconBlank;
    boxTwelve ? box12 = IconTick : box12 = IconBlank;
    boxThirteen ? box13 = IconTick : box13 = IconBlank;
    boxForteen ? box14 = IconTick : box14 = IconBlank;


    var docDefinition = {
        // Footer Start
        footer: function (currentPage, pageCount) {
            return {

                table: {

                    widths: [60, 70, 350, 50],
                    body: [
                        [{ text: "", border: [false, false, false, false] }, { text: "", border: [false, true, false, false] }, { text: "Optimistic Futures Pty Ltd TOID:41053 | USI Permission Verification Form | V1.3 \n Updated DEC2017 | Responsibility Training Manager ", fontSize: 7, border: [false, true, false, false], }, { text: currentPage.toString(), alignment: 'center', fontSize: 9, color: 'white', fillColor: "green", border: [false, true, false, false] }]
                    ]

                },
                layout: {
                    // hLineColor: "#fff",
                    // vLineColor: "#fff",
                    paddingTop: function (i, node) { return 5; },
                    paddingBottom: function (i, node) { return 5; },
                    paddingRight: function (i, node) { return 2; },
                    paddingLeft: function (i, node) { return 2; },

                }
            }
        },
        // Footer Closed

        userPassword: '123',
        ownerPassword: '123456',
        permissions: {
            printing: 'highResolution', //'lowResolution'
            modifying: false,
            copying: false,
            annotating: true,
            fillingForms: true,
            contentAccessibility: true,
            documentAssembly: true
        },




        margin: [0, 0, 0, 0],
        content: [
            {
                image: 'data:image/png;base64,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',
                width: 160,
                height: 70,
                alignment: 'center'
            },

            {
                style: 'header',
                table: {
                    widths: [498],

                    body: [
                        [{ text: 'USI Permission and Verification Form', fillColor: '#4f6228', color: 'white' },]
                    ]
                }
                , layout: {
                    // paddingLeft: function(i, node) { return 14; },
                    // paddingRight: function(i, node) { return 4; },
                    paddingTop: function (i, node) { return 1; },
                    paddingBottom: function (i, node) { return 1; },
                    hLineColor: '#4f6228',
                    vLineColor: '#4f6228',
                    // fillColor: function (i, node) { return null; }
                },
            },
            // Do you need a USI

            {
                text: 'Do you need a USI?',
                style: 'sub_header',
                alignment: 'left',
                margin: [10, 5, 0, 0]
            },

            {
                text: 'You will need a USI when you enrol or re-enrol in training from 1 January 2015 if you are a:\n',
                style: 'paragrapgh',
                margin: [14, 5, 0, 3]
            },
            {
                style: 'paragrapgh',
                margin: [20, 0, 0, 7],
                ul: [
                    { text: 'Student enrolling in nationally recognised training for the first time, for example if you are studying at TAFE or with a private training organisation, completing an apprenticeship or skill set, certificate or diploma course', margin: [0, 0, 0, 4], },
                    { text: 'School student completing nationally recognised training; or student continuing with nationally recognised training', margin: [0, 0, 0, 4], },
                    { text: 'You are a continuing student if you are a student who has already started your course in a previous year (and not yet completed it) and will continue studying after 1 January 2015.', margin: [0, 0, 0, 4], }
                ]
            },

            // How to get a USI
            {
                text: 'How to get a USI?',
                style: 'sub_header',
                alignment: 'left',
                margin: [10, 0, 0, 7]
            },

            {
                style: 'paragrapgh',
                margin: [14, 0, 0, 0],
                text: 'It is free and easy for you to create your own USI online. While you may create your own USI, training organisations are also able to create a USI for you. We do this as part of the enrolment process when you begin studying.',

            },
            {
                style: 'paragrapgh',
                margin: [14, 5, 0, 0],
                italics: true,
                text: 'For more information, please visit: usi.gov.au \n Or contact Email: usi@industry.gov.au \nPhone: Skilling Australia Information line – 13 38 73',

            },
            '\n',
            {
                style: 'header',
                table: {
                    widths: [498],

                    body: [
                        [{ text: 'STUDENT INFORMATION FOR USI', fillColor: '#d6e3bc', color: 'black' },]
                    ]
                }
                , layout: {
                    // paddingLeft: function(i, node) { return 14; },
                    // paddingRight: function(i, node) { return 1; },
                    paddingTop: function (i, node) { return 1; },
                    paddingBottom: function (i, node) { return 1; },
                    hLineColor: '#d6e3bc',
                    vLineColor: '#d6e3bc',
                    // fillColor: function (i, node) { return null; }
                },
            },
            {
                text: "",
                margin: [0, 2, 0, 3]
            },
            // End How to get ***...

            [
                //Input Bar 1************************************

                {
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [
                                                    { text: 'SURNAME', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: one, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: two, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: three, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: four, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: five, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: six, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eight, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: nine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: ten, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eleven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: twelve, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],

                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],

                    }

                    , layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },
                {
                    style: 'tableExample',
                    color: 'red',
                    text: "(AS ON IDENTIFICATION)",
                    margin: [0, 2, 0, 3]
                },
                //Input Bar 1************************************
                //Input Bar 2************************************
                {
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: 'GIVEN NAME', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: thirteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: fourteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fifteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: sixteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seventeen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eighteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: ninteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: twenty, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: twentyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: twentyTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: twentyThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: twentyFour, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],
                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],

                    }

                    , layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },
                {
                    style: 'tableExample',
                    color: 'red',
                    text: "(AS ON IDENTIFICATION)",
                    margin: [0, 2, 0, 3]
                },
                //Input Bar 2************************************
                //Input Bar 3************************************
                {
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: 'MIDDLE NAME', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: twentyFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: twentySix, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: twentySeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: twentyEight, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: twentyNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: thirty, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: thirtyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: thiryTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: thirtyThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: thirtyFour, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: thirtyFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: thirtySix, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],

                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],

                    }

                    , layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },
                {
                    style: 'tableExample',
                    color: 'red',
                    text: "(AS ON IDENTIFICATION)",
                    margin: [0, 2, 0, 3]
                },
                //Input Bar 3************************************
                //Input Bar 4************************************
                {
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: 'DATE OF BIRTH', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: thirtySeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: thirtyEight, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: thirtyNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fourty, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fortyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fortyTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fortyThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fortyFour, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fortyFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fortySix, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fortySeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fortyEight, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],
                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],

                    }

                    , layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },
                //Input Bar 5************************************
                //Input Bar 6************************************
                {
                    margin: [0, 3, 0, 0],
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: 'COUNTRY OF BIRTH', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: fortyNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: fifty, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fiftyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fiftyTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fiftyThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fiftyFour, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fiftyFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fiftySix, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fiftySeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fiftyEight, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: fiftyNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: sixty, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],
                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],

                    }

                    , layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },

                //Input Bar 6************************************
                //Input Bar 7************************************
                {
                    margin: [0, 3, 0, 0],
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: 'TOWN OF BIRTH', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: sixtyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: sixtyTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: sixtyThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: sixtyFour, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: sixtyFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: sixtySix, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: sixtySeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: sixtyEight, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: sixtyNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seventy, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seventyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seventyTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],
                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],

                    }

                    , layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },
                {
                    style: 'tableExample',
                    color: 'red',
                    text: "(AS ON IDENTIFICATION)",
                    margin: [0, 2, 0, 3]
                },
                //Input Bar 7************************************
                {
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: 'COUNTRY', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: seventyThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: seventyFour, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seventyFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seventySix, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seventySeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seventyEight, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: seventyNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eighty, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eightyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eightyTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eightyThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eightyFour, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],

                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],

                    }

                    , layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },
                {
                    style: 'tableExample',
                    color: 'red',
                    text: "(IN WHICH YOU ARE STUDYING)",
                    margin: [0, 2, 0, 3]
                },

                //Input Bar 8************************************
                {
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: 'MOBILE NO', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: eightyFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: eightySix, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eightySeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eightyEight, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: eightyNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: ninty, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: nintyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: nintyTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: nintyThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: nintyFour, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: nintyFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: nintySix, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],
                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],

                    }

                    , layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },

                //Input Bar 8************************************
                //Input Bar 9************************************
                {
                    margin: [0, 3, 0, 0],
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: 'EMAIL ADDRESS', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: nintySeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: nintyEight, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: nintyNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundred, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredFour, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredSix, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredSeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredEight, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],
                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                            [
                                [
                                    {
                                        margin: [0, 3, 0, 3],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: '', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: hundredNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: hundredTen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredEleven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwelve, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredThirteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredForteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredFifteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredSixteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredSeventeen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredEighteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredNinteen, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwenty, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],
                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 7; },
                                            paddingBottom: function (i, node) { return 7; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],
                    },
                    layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },

                //Input Bar 9************************************
                //Input Bar 10************************************
                {
                    margin: [0, 3, 0, 0],
                    style: 'tableExample',
                    fillColor: "#d3d3d3",
                    table: {
                        headerRows: 1,
                        border: [false, true, true, false],
                        body: [
                            [
                                [
                                    {
                                        margin: [0, 1, 0, 1],
                                        table: {
                                            fillColor: "#d3d3d3",
                                            border: [false, false, false, false],
                                            widths: [64, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 8,],
                                            body: [
                                                [{ text: 'USI', margin: [0, 0, 0, 0], border: [false, false, false, false], }, { text: hundredTwentyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false] }, { text: hundredTwentyTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwentyThree, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwentyFour, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwentyFive, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwentySix, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwentySeven, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwentyEight, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredTwentyNine, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredThirty, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredThirtyOne, border: [false, false, false, false], fillColor: "white", }, { text: '', border: [false, false, false, false], margin: [0, 0, 0, 0] }, { text: hundredThirtyTwo, border: [false, false, false, false], fillColor: "white", }, { text: '', margin: [20, 0, 12, 0], border: [false, false, false, false], }],
                                            ]
                                        },
                                        layout: {
                                            paddingLeft: function (i, node) { return 7; },
                                            paddingRight: function (i, node) { return 8 },
                                            paddingTop: function (i, node) { return 3; },
                                            paddingBottom: function (i, node) { return 3; },
                                            // fillColor: function (i, node) { return null; }
                                        }
                                    }
                                ],

                            ],
                        ],

                    }

                    , layout: {
                        // paddingLeft: function(i, node) { return 14; },
                        // paddingRight: function(i, node) { return 4; },
                        paddingTop: function (i, node) { return 9; },
                        paddingBottom: function (i, node) { return 8; },
                        // fillColor: function (i, node) { return null; }
                    },
                    layout: 'noBorders'

                },
                {
                    style: 'tableExample',
                    color: 'red',
                    text: "(IF ALREADY OBTAINED)",
                    margin: [0, 2, 0, 3]
                },
                //Input Bar 10************************************
                {
                    text: 'Identification that can be used for USI Application (tick one that is being provided)',
                    style: 'sub_header',
                    alignment: 'left',
                    margin: [0, 0, 0, 7]
                }
            ],

            {
                table: {

                    fillColor: "#d3d3d3",
                    style: 'paragrapgh',
                    border: [false, false, false, false],
                    body: [
                        [{
                            image: box1,
                            width: 10,
                            height: 10,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: 'MEDICARE CARD',
                            margin: [0, 0, 200, 0],
                            border: [false, false, false, false],
                        }, {
                            image: box5,
                            width: 10,
                            height: 10,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: 'CITIZENSHIP CERTIFICATE ',
                            margin: [0, 0, 0, 0],
                            border: [false, false, false, false],
                        }]
                    ]
                },
            },
            {
                table: {

                    fillColor: "#d3d3d3",
                    border: [false, false, false, false],
                    body: [
                        [{
                            image: box2,
                            width: 10,
                            height: 10,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: 'DRIVERS LICENCE',
                            margin: [0, 0, 196, 0],
                            border: [false, false, false, false],
                        }, {
                            image: box6,
                            width: 10,
                            height: 10,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: 'CERTIFICATE OF REGISTRATION BY DESCENT',
                            margin: [0, 0, 0, 0],
                            border: [false, false, false, false],
                        }]
                    ]
                },
            },
            {
                table: {

                    fillColor: "#d3d3d3",
                    style: 'paragrapgh',
                    border: [false, false, false, false],
                    body: [
                        [{
                            image: box3,
                            width: 10,
                            height: 10,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: 'PASSPORT',
                            border: [false, false, false, false],
                            margin: [0, 0, 222, 0],
                        }, {
                            image: box7,
                            width: 10,
                            height: 10,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: 'IMMI CARD',
                            border: [false, false, false, false],
                            margin: [0, 0, 0, 0],
                        }]
                    ]
                },
            },
            {
                table: {
                    border: [false, false, false, false],
                    body: [
                        [{
                            image: box4,
                            width: 10,
                            height: 10,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: 'BIRTH CERTIFICATE (FULL CERTIFICATE , NOT EXTRACT)',
                            margin: [0, 0, 58, 0],
                            border: [false, false, false, false],
                        }, {
                            image: box8,
                            width: 10,
                            height: 10,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: 'VISA',
                            margin: [0, 0, 0, 0],
                            border: [false, false, false, false],
                        }]
                    ]
                },
            },
            // 2nd page
            {
                style: 'header',
                fillColor: "#d6e3bc",
                table: {
                    body: [
                        [{ text: '', margin: [2, 0, 0, 0] }, { text: 'PRIVACY NOTICE', margin: [0, 0, 410, 0] }],
                    ]
                },
                layout: 'noBorders'
            },
            {
                text: '\nYou have been advised, agree, understand and consent that the personal information you provide in connection with your USI application:\n',
                style: 'paragrapgh',
                margin: [14, 5, 0, 3]
            },
            {
                style: 'paragrapgh',
                margin: [20, 0, 0, 7],
                ul: [
                    { text: 'Is collected by the Student Identifiers Registrar for the purposes of:', margin: [0, 0, 0, 4], },
                    {
                        ul: [
                            { text: 'Applying for, verifying and giving a USI;', margin: [0, 0, 0, 4], listType: 'circle' },
                            { text: ' Resolving problems with a USI; and', margin: [0, 0, 0, 4], listType: 'circle' },
                            { text: 'Creating authenticated vocation education and training (VET) transcripts;', margin: [0, 0, 0, 4], listType: 'circle' }
                        ]
                    },
                    { text: 'May be disclosed to:', margin: [0, 0, 0, 4], },
                    {
                        ul: [
                            { text: 'Commonwealth and State/Territory Government Departments and Agencies and Statutory Bodies performing functions relating to VET for:', margin: [0, 0, 0, 4], listType: 'circle' },
                            {
                                type: 'square',
                                ul: [
                                    { text: 'The purposes of administering and auditing Vocational Education and Training (VET), VET providers and VET programs;', margin: [0, 0, 0, 4], },
                                    { text: 'Education related policy and research purposes; and', margin: [0, 0, 0, 4], },
                                    { text: 'To assist in determining eligibility for training subsidies;', margin: [0, 0, 0, 4], }
                                ]
                            },
                        ]
                    },
                    {
                        ul: [

                            { text: ' VET regulators to enable them to perform their VET regulatory functions;', margin: [0, 0, 0, 4], listType: 'circle' },
                        ]
                    },
                    {
                        ul: [
                            { text: ' VET Admission Bodies for the purposes of administering VET and VET programs;', margin: [0, 0, 0, 4], listType: 'circle' },
                        ]
                    },
                    {
                        ul: [
                            { text: ' Current and former Registered Training Organisations to enable them to deliver VET courses to the individual, meet their reporting obligations under the VET Standards and Government Contracts and assist in determining eligibility for training subsidies;', margin: [0, 0, 0, 4], listType: 'circle' },
                        ]
                    },
                    {
                        ul: [
                            { text: ' School for the purposes of delivering VET courses to the individual and reporting on these courses;', margin: [0, 0, 0, 4], listType: 'circle' }
                        ]
                    },
                    {
                        ul: [
                            { text: ' The National Centre for Vocational Education Research for the purposes of creating authenticated VET transcripts, resolving problems with USI’s and for the collection, preparation and auditing of national VET statistics;', margin: [0, 0, 0, 4], listType: 'circle' }
                        ]
                    },
                    {
                        ul: [
                            { text: ' Researchers for education and training related research purposes; Any other person or agency that may be authorised or required by law to access the information;', margin: [0, 0, 0, 4], listType: 'circle' }
                        ]
                    },
                    {
                        ul: [
                            { text: ' Any entity contractually engaged by the Student Identifiers Registrar to assist in the performance of his or her functions in the administration of the USI system; and', margin: [0, 0, 0, 4], listType: 'circle' }
                        ]
                    },
                    {
                        text: ' Will not otherwise be disclosed without their consent unless authorised or required by or under law. \n\n\nThe full copy of the Privacy Policy can be seen on this website http://USI.gov.au/Pages/privacy-policy.aspx. This site will also contain information on how to access and seek correction of the personal information held and how such complaints will be dealt with. \n\n\nIn accordance with Section 11 of the Student Identifiers Act 2014, Optimistic Futures information which we collect from individuals solely for the purpose of applying for the student has made the application or the information is no longer needed for law to retain it. \n\n\nI have read and understood the privacy notice and I give my permission to Optimistic provided, to apply USI on my behalf, validate/verify my USI, disclose and use my view transcripts or extracts by using my USI.', margin: [0, 0, 0, 4]
                    },
                ],
            },
            '\n',
            {
                table: {
                    fillColor: "#d3d3d3",
                    border: [false, false, false, false],
                    widths: [60, 110, 0, 50, 110, 0, 20, 80],
                    body: [
                        [{
                            style: 'paragrapgh',
                            text: 'STUDENT NAME',
                            bold: true,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: studentName,
                            fillColor: "",
                            margin: [0, 0, 0, 0],
                            border: [true, true, true, true],
                        },
                        {
                            fontSize: 8,
                            text: '',
                            fillColor: "",
                            margin: [0, 0, 0, 0],
                            border: [false, false, false, false],
                        },
                        {
                            style: 'paragrapgh',
                            text: 'SIGNATURE',
                            bold: true,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: '',
                            fillColor: "#d3d3d3",
                            margin: [0, 0, 0, 0],
                            border: [true, true, true, true],
                        },
                        {
                            fontSize: 8,
                            text: '',
                            fillColor: "",
                            margin: [0, 0, 0, 0],
                            border: [false, false, false, false],
                        },
                        {
                            style: 'paragrapgh',
                            text: 'DATE',
                            bold: true,
                            border: [false, false, false, false],
                        },
                        {
                            fontSize: 8,
                            text: date,
                            fillColor: "",
                            margin: [0, 0, 0, 0],
                            border: [true, true, true, true],
                        },
                        ]
                    ]
                }, layout: {
                    // paddingLeft: function(i, node) { return 14; },
                    // paddingRight: function(i, node) { return 4; },
                    paddingTop: function (i, node) { return 7; },
                    paddingBottom: function (i, node) { return 7; },
                    hLineColor: '#d3d3d3',
                    vLineColor: '#d3d3d3',
                    // fillColor: function (i, node) { return null; }
                },
            },
            '\n',
            {
                style: 'header',
                fillColor: "#d6e3bc",
                table: {
                    body: [
                        [{ text: '', margin: [2, 0, 0, 0] }, { text: 'For office use only:', margin: [0, 0, 400, 0] }],
                    ]
                },
                layout: 'noBorders'
            },
            "\n",
            {
                table: {
                    fillColor: "#d3d3d3",
                    style: 'paragrapgh',
                    border: [false, false, false, false],
                    body: [
                        [

                            {
                                fontSize: 8,
                                text: 'ALL REQUIRED DATA RECEIVED FOR APPLICATION OF USI',
                            },
                            {
                                fontSize: 8,
                                text: '',
                                margin: [0, 0, 200, 0]
                            },
                            {
                                image: box9,
                                width: 10,
                                height: 10,
                                border: [false, false, false, false],
                            },
                            {
                                fontSize: 8,
                                text: 'Yes',
                            },
                            {
                                image: box10,
                                width: 10,
                                height: 10,
                                border: [false, false, false, false],
                            },
                            {
                                fontSize: 8,
                                text: 'No',
                            },
                        ]
                    ]
                },
                layout: 'noBorders'
            },
            "\n\n",
            {
                table: {
                    fillColor: "#d3d3d3",
                    style: 'paragrapgh',
                    border: [false, false, false, false],
                    body: [
                        [

                            {
                                fontSize: 8,
                                text: 'USI APPLIED ON BEHALF OF THE STUDENT?',
                            },
                            {
                                fontSize: 8,
                                text: '',
                                margin: [0, 0, 247, 0]
                            },
                            {
                                image: box11,
                                width: 10,
                                height: 10,
                                border: [false, false, false, false],
                            },
                            {
                                fontSize: 8,
                                text: 'Yes',
                            },
                            {
                                image: box12,
                                width: 10,
                                height: 10,
                                border: [false, false, false, false],
                            },
                            {
                                fontSize: 8,
                                text: 'No',
                            },
                        ]
                    ]
                },
                layout: 'noBorders'
            },
            "\n\n",
            {
                table: {
                    fillColor: "#d3d3d3",
                    style: 'paragrapgh',
                    border: [false, false, false, false],
                    body: [
                        [

                            {
                                fontSize: 8,
                                text: 'USI VERIFIED/VALIDATED',
                            },
                            {
                                fontSize: 8,
                                text: '',
                                margin: [0, 0, 316, 0]
                            },
                            {
                                image: box13,
                                width: 10,
                                height: 10,
                                border: [false, false, false, false],
                            },
                            {
                                fontSize: 8,
                                text: 'Yes',
                            },
                            {
                                image: box14,
                                width: 10,
                                height: 10,
                                border: [false, false, false, false],
                            },
                            {
                                fontSize: 8,
                                text: 'No',
                            },
                        ]
                    ]
                },
                layout: 'noBorders'
            },
            '\n\n',
            {
                table: {
                    bold: true,
                    fillColor: "#d3d3d3",
                    border: [false, false, false, false],
                    body: [
                        [{
                            style: 'paragrapgh',
                            text: 'OPTIMISTIC FUTURES REPRESENTATIVE NAME',
                            border: [false, false, false, false],
                        },
                        {

                            text: '',
                            fillColor: "#d3d3d3",
                            margin: [0, 0, 80, 0],
                            border: [true, true, true, true],
                        },
                        {

                            text: '',
                            fillColor: "",
                            margin: [0, 0, 0, 0],
                            border: [false, false, false, false],
                        },
                        {
                            style: 'paragrapgh',
                            text: 'SIGNATURE',
                            border: [false, false, false, false],
                        },
                        {

                            text: '',
                            fillColor: "#d3d3d3",
                            margin: [0, 0, 70, 0],
                            border: [true, true, true, true],
                        },
                        {

                            text: '',
                            fillColor: "",
                            margin: [0, 0, 0, 0],
                            border: [false, false, false, false],
                        },
                        {
                            style: 'paragrapgh',
                            text: 'DATE',
                            border: [false, false, false, false],
                        },
                        {

                            text: '',
                            fillColor: "#d3d3d3",
                            margin: [0, 0, 70, 0],
                            border: [true, true, true, true],
                        },
                        ]
                    ]
                }, layout: {
                    paddingLeft: function (i, node) { return 1; },
                    paddingRight: function (i, node) { return 3; },
                    paddingTop: function (i, node) { return 6; },
                    paddingBottom: function (i, node) { return 6; },
                    hLineColor: '#d3d3d3',
                    vLineColor: '#d3d3d3',
                    // fillColor: function (i, node) { return null; }
                },
            },

        ],

        styles: {
            header: {
                fontSize: 11,
                bold: true,
            },
            sub_header: {
                fontSize: 10,
                bold: true,
                color: "blue"
            },
            paragrapgh: {
                fontSize: 8
            },

            tableExample: {
                border: [false, false, false, false],
                fontSize: 7,
                bold: true,
                color: 'green',
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
                    form1: pdf
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
        pdfMake.createPdf(docDefinition).download('USI_Form.pdf');
        // pdfMake.createPdf(docDefinition).open();
    }
}