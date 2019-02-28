function getDataUri(url, callback) {
    var image = new Image();
    image.onload = function () {
        var c = document.getElementById("passportURL");
        c.width = this.naturalWidth; // or 'width' if you want a special/scaled size
        c.height = this.naturalHeight; // or 'height' if you want a special/scaled size

        var ctx = c.getContext('2d');
        ctx.drawImage(this, 0, 0);

        // Get raw image data
        // callback(c.toDataURL('image/png').replace(/^data:image\/(png|jpg);base64,/, ''));

        // ... or get as Data URI
        callback(c.toDataURL());
    };
    image.src = url;

}
    function printDoc(id,srcUrl){
    // Usage
    
    getDataUri(document.getElementById(id).src, function(dataUri) {
    // Do whatever you'd like with the Data URI!
      var stringVal = srcUrl.search(".pdf");
    //   console.log(srcUrl);
// ######### 1 ####
    if(id == "passportImg" && stringVal == -1){
          var textData = "PASSPORT";
    }
      else if(id == "passportImg" && stringVal != -1 ){
        window.open(
            srcUrl,
            '_blank' // <- This is what makes it open in a new window.
          );
        throw new Error('Execution Successfully..!');
    }
// ######### 2 ####
    else if(id == "driversImg" && stringVal == -1){
        var textData = "DRIVERS LICENCE ";
    }
    else if (id == "driversImg" && stringVal != -1){
        window.open(
            srcUrl,
            '_blank' // <- This is what makes it open in a new window.
          );
        throw new Error('Execution Successfully..!');
    }
// ######### 3 ####
    else if(id == "medicareImg" && stringVal == -1){
        var textData = "MEDICARE (GREEN ONLY)";
    }
    else if (id == "medicareImg" && stringVal != -1){
        window.open(
            srcUrl,
            '_blank' // <- This is what makes it open in a new window.
          );
          throw new Error('Execution Successfully..!');
    }
// ######### 4 ####

    else if(id == "b_certImg" && stringVal == -1){
        var textData = "BIRTH CERTIFICATE";
    }
    else if (id == "b_certImg" && stringVal != -1){
        window.open(
            srcUrl,
            '_blank' // <- This is what makes it open in a new window.
          );
          throw new Error('Execution Successfully..!');
    }

// ######### 5 ####
    else if(id == "citizenCertImg" && stringVal == -1){
        var textData = "CITIZENSHIP CERTIFICATE";
    }
    else if (id == "citizenCertImg" && stringVal != -1){
        window.open(
            srcUrl,
            '_blank' // <- This is what makes it open in a new window.
          );
          throw new Error('Execution Successfully..!');
    }
// ######### 6 ####  
else if(id == "regCertImg" && stringVal == -1){
    var textData = "REGISTRATION CERTIFICATE BY DESCENT";
}
else if (id == "regCertImg" && stringVal != -1){
    window.open(
        srcUrl,
        '_blank' // <- This is what makes it open in a new window.
      );
      throw new Error('Execution Successfully..!');
}
// ######### 7 ####  
else if(id == "IMMIImg" && stringVal == -1){
    var textData = "IMMI CARD";
}
else if (id == "IMMIImg" && stringVal != -1){
    window.open(
        srcUrl,
        '_blank' // <- This is what makes it open in a new window.
      );
      throw new Error('Execution Successfully..!');
}
// ######### 8 ####    
else if(id == "VISAImg" && stringVal == -1){
    var textData = "VISA";
}
else if (id == "VISAImg" && stringVal != -1){
    window.open(
        srcUrl,
        '_blank' // <- This is what makes it open in a new window.
      );
      throw new Error('Execution Successfully..!');
}


      var docDefinition = {
        margin: [0, 0, 0, 0],
        content:
            [
                {
                    table: {
                        widths: [500],
                        body: [
                            [
                                {
                                    text: textData+"\n\n\n\n", bold: true, fontSize: 12, alignment: "center", style: "text", margin: [0, 30, 0, 0]
                                },
                            ],
                            [
                                
                                {
                                    image: dataUri,
                                    width: 450,
                                    height: 350,
                                    alignment: 'center',
                                    margin: [0, 0, -7, 0]
                                },
                            ]
                        ]
                    },
                    layout: {
                        paddingTop: function (i, node) { return 0; },
                        paddingBottom: function (i, node) { return 0; },
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                        hLineColor: '#fff',
                        vLineColor: '#fff',
                    }
                }
            ],

        styles: {
            header: {
                fontSize: 7,
                bold: true,
            },
            paragraph: {
                fontSize: 9
            },
            subParagraph: {
                fontSize: 10,
                bold:true
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

    // Open the pdf in new window
    pdfMake.createPdf(docDefinition).open();
})
    
    
    }