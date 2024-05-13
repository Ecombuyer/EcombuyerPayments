
 // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      let options = {
        selector: '#tinymce-mytextarea',
        height: 200,
        menubar: false,
        statusbar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | ' +
          'bold italic backcolor | alignleft aligncenter ' +
          'alignright alignjustify | bullist numlist outdent indent | ' +
          'removeformat',
        content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }' +
                      'textarea { border-radius: 10px; }'
      }
      if (localStorage.getItem("tablerTheme") === 'dark') {
        options.skin = 'oxide-dark';
        options.content_css = 'dark';
      }
      tinyMCE.init(options);
    })
    // @formatter:on


    // Design By
// - https://dribbble.com/shots/13992184-File-Uploader-Drag-Drop

// Select Upload-Area
const uploadArea = document.querySelector('#uploadArea')

// Select Drop-Zoon Area
const dropZoon = document.querySelector('#dropZoon');

// Loading Text
const loadingText = document.querySelector('#loadingText');

// Slect File Input
const fileInput = document.querySelector('#fileInput');

// Select Preview Image
const previewImage = document.querySelector('#previewImage');

// File-Details Area
const fileDetails = document.querySelector('#fileDetails');

// Uploaded File
const uploadedFile = document.querySelector('#uploadedFile');

// Uploaded File Info
const uploadedFileInfo = document.querySelector('#uploadedFileInfo');

// Uploaded File  Name
const uploadedFileName = document.querySelector('.uploaded-file__name');

// Uploaded File Icon
const uploadedFileIconText = document.querySelector('.uploaded-file__icon-text');

// Uploaded File Counter
const uploadedFileCounter = document.querySelector('.uploaded-file__counter');

// ToolTip Data
const toolTipData = document.querySelector('.upload-area__tooltip-data');

// Images Types
const imagesTypes = [
  "jpeg",
  "png",
  "svg",
  "gif"
];

// Append Images Types Array Inisde Tooltip Data
toolTipData.innerHTML = [...imagesTypes].join(', .');

// When (drop-zoon) has (dragover) Event
dropZoon.addEventListener('dragover', function (event) {
  // Prevent Default Behavior
  event.preventDefault();

  // Add Class (drop-zoon--over) On (drop-zoon)
  dropZoon.classList.add('drop-zoon--over');
});

// When (drop-zoon) has (dragleave) Event
dropZoon.addEventListener('dragleave', function (event) {
  // Remove Class (drop-zoon--over) from (drop-zoon)
  dropZoon.classList.remove('drop-zoon--over');
});

// When (drop-zoon) has (drop) Event
dropZoon.addEventListener('drop', function (event) {
  // Prevent Default Behavior
  event.preventDefault();

  // Remove Class (drop-zoon--over) from (drop-zoon)
  dropZoon.classList.remove('drop-zoon--over');

  // Select The Dropped File
  const file = event.dataTransfer.files[0];

  // Call Function uploadFile(), And Send To Her The Dropped File :)
  uploadFile(file);
});

// When (drop-zoon) has (click) Event
dropZoon.addEventListener('click', function (event) {
  // Click The (fileInput)
  fileInput.click();
});

// When (fileInput) has (change) Event
fileInput.addEventListener('change', function (event) {
  // Select The Chosen File
  const file = event.target.files[0];

  // Call Function uploadFile(), And Send To Her The Chosen File :)
  uploadFile(file);
});

// Upload File Function
function uploadFile(file) {
  // FileReader()
  const fileReader = new FileReader();
  // File Type
  const fileType = file.type;
  // File Size
  const fileSize = file.size;

  // If File Is Passed from the (File Validation) Function
  if (fileValidate(fileType, fileSize)) {
    // Add Class (drop-zoon--Uploaded) on (drop-zoon)
    dropZoon.classList.add('drop-zoon--Uploaded');

    // Show Loading-text
    loadingText.style.display = "block";
    // Hide Preview Image
    previewImage.style.display = 'none';

    // Remove Class (uploaded-file--open) From (uploadedFile)
    uploadedFile.classList.remove('uploaded-file--open');
    // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
    uploadedFileInfo.classList.remove('uploaded-file__info--active');

    // After File Reader Loaded
    fileReader.addEventListener('load', function () {
      // After Half Second
      setTimeout(function () {
        // Add Class (upload-area--open) On (uploadArea)
        uploadArea.classList.add('upload-area--open');

        // Hide Loading-text (please-wait) Element
        loadingText.style.display = "none";
        // Show Preview Image
        previewImage.style.display = 'block';

        // Add Class (file-details--open) On (fileDetails)
        fileDetails.classList.add('file-details--open');
        // Add Class (uploaded-file--open) On (uploadedFile)
        uploadedFile.classList.add('uploaded-file--open');
        // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
        uploadedFileInfo.classList.add('uploaded-file__info--active');
      }, 500); // 0.5s

      // Add The (fileReader) Result Inside (previewImage) Source
      previewImage.setAttribute('src', fileReader.result);

      // Add File Name Inside Uploaded File Name
      uploadedFileName.innerHTML = file.name;

      // Call Function progressMove();
      progressMove();
    });

    // Read (file) As Data Url
    fileReader.readAsDataURL(file);
  } else { // Else

    this; // (this) Represent The fileValidate(fileType, fileSize) Function

  };
};

// Progress Counter Increase Function
function progressMove() {
  // Counter Start
  let counter = 0;

  // After 600ms
  setTimeout(() => {
    // Every 100ms
    let counterIncrease = setInterval(() => {
      // If (counter) is equle 100
      if (counter === 100) {
        // Stop (Counter Increase)
        clearInterval(counterIncrease);
      } else { // Else
        // plus 10 on counter
        counter = counter + 10;
        // add (counter) vlaue inisde (uploadedFileCounter)
        uploadedFileCounter.innerHTML = `${counter}%`
      }
    }, 100);
  }, 600);
};


// Simple File Validate Function
function fileValidate(fileType, fileSize) {
  // File Type Validation
  let isImage = imagesTypes.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

  // If The Uploaded File Type Is 'jpeg'
  if (isImage[0] === 'jpeg') {
    // Add Inisde (uploadedFileIconText) The (jpg) Value
    uploadedFileIconText.innerHTML = 'jpg';
  } else { // else
    // Add Inisde (uploadedFileIconText) The Uploaded File Type
    uploadedFileIconText.innerHTML = isImage[0];
  };

  // If The Uploaded File Is An Image
  if (isImage.length !== 0) {
    // Check, If File Size Is 2MB or Less
    if (fileSize <= 2000000) { // 2MB :)
      return true;
    } else { // Else File Size
      return alert('Please Your File Should be 2 Megabytes or Less');
    };
  } else { // Else File Type
    return alert('Please make sure to upload An Image File Type');
  };
};

// :)

// preview 2 script


  // Design By
// - https://dribbble.com/shots/13992184-File-Uploader-Drag-Drop

// Select Upload-Area
const uploadArea2 = document.querySelector('#uploadArea2')

// Select Drop-Zoon Area
const dropZoon2 = document.querySelector('#dropZoon2');

// Loading Text
const loadingText2 = document.querySelector('#loadingText2');

// Slect File Input
const fileInput2 = document.querySelector('#fileInput2');

// Select Preview Image
const previewImage2 = document.querySelector('#previewImage2');

// File-Details Area
const fileDetails2 = document.querySelector('#fileDetails2');

// Uploaded File
const uploadedFile2 = document.querySelector('#uploadedFile2');

// Uploaded File Info
const uploadedFileInfo2 = document.querySelector('#uploadedFileInfo2');

// Uploaded File  Name
const uploadedFileName2 = document.querySelector('.uploaded-file__name2');

// Uploaded File Icon
const uploadedFileIconText2 = document.querySelector('.uploaded-file__icon-text2');

// Uploaded File Counter
const uploadedFileCounter2 = document.querySelector('.uploaded-file__counter2');

// ToolTip Data
const toolTipData2 = document.querySelector('.upload-area__tooltip-data2');

// Images Types
const imagesTypes2 = [
"jpeg",
"png",
"svg",
"gif"
];

// Append Images Types Array Inisde Tooltip Data
toolTipData2.innerHTML = [...imagesTypes2].join(', .');

// When (drop-zoon) has (dragover) Event
dropZoon2.addEventListener('dragover', function (event) {
// Prevent Default Behavior
event.preventDefault();

// Add Class (drop-zoon--over) On (drop-zoon)
dropZoon2.classList.add('drop-zoon--over2');
});

// When (drop-zoon) has (dragleave) Event
dropZoon2.addEventListener('dragleave', function (event) {
// Remove Class (drop-zoon--over) from (drop-zoon)
dropZoon2.classList.remove('drop-zoon--over2');
});

// When (drop-zoon) has (drop) Event
dropZoon2.addEventListener('drop', function (event) {
// Prevent Default Behavior
event.preventDefault();

// Remove Class (drop-zoon--over) from (drop-zoon)
dropZoon2.classList.remove('drop-zoon--over2');

// Select The Dropped File
const file = event.dataTransfer.files[0];

// Call Function uploadFile(), And Send To Her The Dropped File :)
uploadFile2(file);
});

// When (drop-zoon) has (click) Event
dropZoon2.addEventListener('click', function (event) {
// Click The (fileInput)
fileInput2.click();
});

// When (fileInput) has (change) Event
fileInput2.addEventListener('change', function (event) {
// Select The Chosen File
const file = event.target.files[0];

// Call Function uploadFile(), And Send To Her The Chosen File :)
uploadFile2(file);
});

// Upload File Function
function uploadFile2(file) {
// FileReader()
const fileReader = new FileReader();
// File Type
const fileType = file.type;
// File Size
const fileSize = file.size;

// If File Is Passed from the (File Validation) Function
if (fileValidate(fileType, fileSize)) {
  // Add Class (drop-zoon--Uploaded2) on (drop-zoon)
  dropZoon2.classList.add('drop-zoon--Uploaded2');

  // Show Loading-text
  loadingText2.style.display = "block";
  // Hide Preview Image
  previewImage2.style.display = 'none';

  // Remove Class (uploaded-file--open) From (uploadedFile)
  uploadedFile2.classList.remove('uploaded-file--open2');
  // Remove Class (uploaded-file__info--active) from (uploadedFileInfo)
  uploadedFileInfo2.classList.remove('uploaded-file__info2--active');

  // After File Reader Loaded
  fileReader.addEventListener('load', function () {
    // After Half Second
    setTimeout(function () {
      // Add Class (upload-area--open) On (uploadArea)
      uploadArea2.classList.add('upload-area--open2');

      // Hide Loading-text (please-wait) Element
      loadingText2.style.display = "none";
      // Show Preview Image
      previewImage2.style.display = 'block';

      // Add Class (file-details--open) On (fileDetails)
      fileDetails2.classList.add('file-details--open2');
      // Add Class (uploaded-file--open) On (uploadedFile)
      uploadedFile2.classList.add('uploaded-file--open2');
      // Add Class (uploaded-file__info--active) On (uploadedFileInfo)
      uploadedFileInfo2.classList.add('uploaded-file__info2--active');
    }, 500); // 0.5s

    // Add The (fileReader) Result Inside (previewImage) Source
    previewImage2.setAttribute('src', fileReader.result);

    // Add File Name Inside Uploaded File Name
    uploadedFileName2.innerHTML = file.name;

    // Call Function progressMove();
    progressMove2();
  });

  // Read (file) As Data Url
  fileReader.readAsDataURL(file);
} else { // Else

  this; // (this) Represent The fileValidate(fileType, fileSize) Function

};
};

// Progress Counter Increase Function
function progressMove2() {
// Counter Start
let counter = 0;

// After 600ms
setTimeout(() => {
  // Every 100ms
  let counterIncrease = setInterval(() => {
    // If (counter) is equle 100
    if (counter === 100) {
      // Stop (Counter Increase)
      clearInterval(counterIncrease);
    } else { // Else
      // plus 10 on counter
      counter = counter + 10;
      // add (counter) vlaue inisde (uploadedFileCounter)
      uploadedFileCounter2.innerHTML = `${counter}%`
    }
  }, 100);
}, 600);
};


// Simple File Validate Function
function fileValidate(fileType, fileSize) {
// File Type Validation
let isImage = imagesTypes2.filter((type) => fileType.indexOf(`image/${type}`) !== -1);

// If The Uploaded File Type Is 'jpeg'
if (isImage[0] === 'jpeg') {
  // Add Inisde (uploadedFileIconText) The (jpg) Value
  uploadedFileIconText2.innerHTML = '';
} else { // else
  // Add Inisde (uploadedFileIconText) The Uploaded File Type
  uploadedFileIconText2.innerHTML = isImage[0];
};

// If The Uploaded File Is An Image
if (isImage.length !== 0) {
  // Check, If File Size Is 2MB or Less
  if (fileSize <= 2000000) { // 2MB :)
    return true;
  } else { // Else File Size
    return alert('Please Your File Should be 2 Megabytes or Less');
  };
} else { // Else File Type
  return alert('Please make sure to upload An Image File Type');
};
};

// :)



    document.getElementById('productfile').addEventListener('change', function() {

        const file = this.files[0]; // Get the selected file
        const maxSize = 100 * 1024 * 1024; // 100MB in bytes

        if (file && file.size > maxSize) {
            ff1.innerHTML = 'File size exceeds the limit of 100MB.';
            // alert('File size exceeds the limit of 100MB.');
            this.value = ''; // Clear the file input to allow selecting a different file
        }
    });

