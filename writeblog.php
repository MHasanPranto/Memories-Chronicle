<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update Profile</title>
    <link rel="shortcut icon" href="./images/logo2.png" type="image/x-icon" />
    <link rel="stylesheet" href="./css/updateprofile.css" />
    <link rel="stylesheet" href="./css/writeblog.css" />
    <link rel="stylesheet" href="./css/courser.css" />
    <link rel="stylesheet" href="./css/transition.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />

    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
  </head>
  <body>
    <div class="transition transition-3 is-active"></div>
    <!-- ------------------------cursor---------------- -->
    <div id="cursor"></div>
    <span class="tail"></span>
    <!-- ------------------------cursor---------------- -->
    <form action="./include/blogwrite.php" method="POST" autocomplete="off" enctype="multipart/form-data">
      <div class="table">
        <div class="table-cell">
          <div class="modal">
            <div class="info">
              <div class="label">Give Your Post A Title</div>
              <div class="editable">
                <input
                  name="title"
                  class="w3-input w3-animate-input"
                  type="text"
                  style="width: 300px"
                />
              </div>
              <button
                class="file-upload-btn"
                type="button"
                onclick="$('.file-upload-input').trigger( 'click' )"
              >
                Add Image
              </button>

              <div class="image-upload-wrap">
                <input
                  class="file-upload-input"
                  type="file"
                  name="b_image"
                  onchange="readURL(this);"
                  accept="image/*"
                />
                <div class="drag-text">
                  <h3>Drag and drop a file or select add Image</h3>
                </div>
              </div>
              <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                  <button
                    type="button"
                    onclick="removeUpload()"
                    class="remove-image"
                  >
                    Remove <span class="image-title">Uploaded Image</span>
                  </button>
                </div>
              </div>
            </div>

            <button type="submit">Post</button>
            <button><a href="./profile.php">Cancel</a></button>
          </div>
        </div>
      </div>
      <input type="file" id="mediaFile" />
    </form>
    <div class="circle1"></div>
    <div class="circle2"></div>

    <script src="./js/courser.js"></script>
    <script src="./js/transition.js"></script>
    <script src="./js/writeblog.js"></script>
  </body>
</html>
