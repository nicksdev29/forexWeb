function uploadNewsMedia() {
    $('#media-upload-loader').css('display','flex');
    var file = document.getElementById('news_attachment').files[0];
    var fileForm = new FormData();
    fileForm.append('media', file);
    fileForm.append('destination', '/uploads/news/');
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '../common/upload.php');
    ajax.onreadystatechange = function(ajaxEvent) {
        if(ajax.readyState === ajax.DONE && ajax.status === 200) {
            var responseData = JSON.parse(ajax.response);
            $('#media-upload-loader').hide();
            document.getElementById('uploadedFileUrl').value = decodeURIComponent(responseData.file);
            document.getElementById('uploadedFile').innerHTML = decodeURIComponent(responseData.file);
            document.getElementById('uploadedFile').setAttribute('href', decodeURIComponent(responseData.file) );
        }
    }
    ajax.send(fileForm);
    return false;
}

function uploadPackageImg() {
    $('#media-upload-loader').css('display','flex');
    var file = document.getElementById('img_attachment').files[0];
    var fileForm = new FormData();
    fileForm.append('media', file);
    fileForm.append('destination', '/uploads/packages/');
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '../common/upload.php');
    ajax.onreadystatechange = function(ajaxEvent) {
        if(ajax.readyState === ajax.DONE && ajax.status === 200) {
            var responseData = JSON.parse(ajax.response);
            $('#media-upload-loader').hide();
            $('#uploadedFileUrl').val( decodeURI(responseData.file) );
            $('#uploadedFile').css('display', 'block');
            $('#uploadedFile').attr('src', decodeURI(responseData.file) );
        }
    }
    ajax.send(fileForm);
    return false;
}

function updateBuySellRate(id, buyRate, sellRate) {
    console.log('payload Given: ', id, '-', buyRate, '-', sellRate);
    $('#buy-sell-loader'+id).css('display','flex');
    var currencyForm = new FormData();
    currencyForm.append('currencyId', id);
    currencyForm.append('buyRate', buyRate);
    currencyForm.append('sellRate', sellRate);
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '../forex-currencies/update-currency-buy-sell.php');
    ajax.onreadystatechange = function(ajaxEvent) {
        if(ajax.readyState === ajax.DONE && ajax.status === 200) {
            var responseData = JSON.parse(ajax.response);
            $('#buy-sell-loader'+id).hide();
            console.log('updated response: ', responseData);
        }
    }
    ajax.send(currencyForm);
    return false;
}