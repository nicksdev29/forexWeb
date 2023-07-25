function uploadNewsMedia() {
    var file = document.getElementById('news_attachment').files[0];
    var fileForm = new FormData();
    fileForm.append('media', file);
    fileForm.append('destination', '/uploads/news/');
    var ajax = new XMLHttpRequest();
    ajax.open('POST', '../common/upload.php');
    ajax.onreadystatechange = function(ajaxEvent) {
        if(ajax.readyState === ajax.DONE && ajax.status === 200) {
            var responseData = JSON.parse(ajax.response);
            // console.log( decodeURIComponent(responseData.file) );
            document.getElementById('uploadedFileUrl').value = decodeURIComponent(responseData.file);
            document.getElementById('uploadedFile').innerHTML = decodeURIComponent(responseData.file);
            document.getElementById('uploadedFile').setAttribute('hsref', decodeURIComponent(responseData.file) );
        }
    }
    ajax.send(fileForm);
    return false;
}