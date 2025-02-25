<script type="text/javascript">
var PictureUpdate = /** @class */ (function () {
    function PictureUpdate() {
        this.profile = $('.profile-pic'); //direct parent
        this.cover = $('.cover'); //direct parent
        this.updateProfile();
        this.updateCover();
    }
    PictureUpdate.prototype.updateProfile = function () {
        var _this = this;
        var input = $('input', this.profile);
        input.change(function (e) {
            var img = URL.createObjectURL(e.target.files[0]);
            _this.fireAJAX(null, img, _this.profile);
        });
    };
    PictureUpdate.prototype.updateCover = function () {
        var _this = this;
        var input = $('input', this.cover);
        input.change(function (e) {
            var img = URL.createObjectURL(e.target.files[0]);
            _this.fireAJAX(null, img, _this.cover);
        });
    };
    PictureUpdate.prototype.fireAJAX = function (url, data, element) {
        var _this = this;
        $.ajax({
            type: "POST",
            data: data,
            beforeSend: function () {
                _this.startLoader(element);
            },
            success: function () {
                setTimeout(function () {
                    _this.destroyLoader(element);
                    $('> img', element).attr("src", data);
                }, 2000);
            }
        });
    };
    PictureUpdate.prototype.startLoader = function (element) {
        var loader = $('.layer', element);
        loader.addClass("visible");
    };
    PictureUpdate.prototype.destroyLoader = function (element) {
        var loader = $('.layer', element);
        loader.removeClass("visible");
    };
    return PictureUpdate;
}());
new PictureUpdate();
</script>
<style>
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg) translate(-50%);
            transform: rotate(0deg) translate(-50%);
  }
  100% {
    -webkit-transform: rotate(360deg) translate(-50%);
            transform: rotate(360deg) translate(-50%);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg) translate(-50%);
            transform: rotate(0deg) translate(-50%);
  }
  100% {
    -webkit-transform: rotate(360deg) translate(-50%);
            transform: rotate(360deg) translate(-50%);
  }
}
.loader {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translateY(-50%) translateX(-50%);
          transform: translateY(-50%) translateX(-50%);
  -webkit-animation: spin 0.35s infinite linear;
          animation: spin 0.35s infinite linear;
  border: 2px solid #707070;
  border-radius: 50%;
  border-top-color: white;
  height: 25px;
  -webkit-transform-origin: left;
          transform-origin: left;
  top: 45%;
  width: 25px;
}
.hidden-input {
  left: -999px;
  position: absolute;
}
.profile {
  *zoom: 1;
  background-color: white;
  border-radius: 2px;
  display: block;
  float: none;
  margin: 5px auto;
  overflow: hidden;
  padding-bottom: 20px;
  width: 400px;
}
.profile:before,
.profile:after {
  content: "";
  display: table;
}
.profile:after {
  clear: both;
}
.about {
  font-family: Helvetica, "Helvetica Neue", "Tahoma";
  font-size: 12px;
  color: #adadad;
  line-height: 17px;
}
.image-wrapper {
  background: rgba(0, 0, 0, 0.2);
  bottom: -50px;
  height: 30px;
  left: 0;
  position: absolute;
  transition: bottom 0.15s linear;
  width: 100%;
}
.edit {
  position: relative;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  color: white;
  cursor: pointer;
  font-size: 22px;
  top: 10px;
}
.cover {
  height: 300px;
  overflow: hidden;
  position: relative;
  width: 100%;
}
.cover img {
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  height: 300px;
}
.cover .image-wrapper {
  bottom: auto;
  height: 22px;
  left: auto;
  position: absolute;
  right: 0;
  top: 0;
  width: 45px;
}
.name {
  font-family: Helvetica, "Helvetica Neue", "Tahoma";
  font-size: 18px;
}
.profile-pic {
  position: absolute;
  left: 50%;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  border-radius: 50%;
  border: 4px solid white;
  height: 210px;
  overflow: hidden;
  -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
  width: 210px;
  top: 0;
}
.profile-pic img {
  box-sizing: border-box;
  height: 100%;
  left: 50%;
  max-height: 100%;
  position: absolute;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
  transition: all 0.15s ease-out;
  width: auto;
}
.profile-pic:hover .image-wrapper {
  bottom: 0;
}
.username {
  margin-top: 122px;
  text-align: center;
}
.user-info {
  *zoom: 1;
  padding: 8px;
  position: relative;
}
.user-info:before,
.user-info:after {
  content: "";
  display: table;
}
.user-info:after {
  clear: both;
}
body {
  background-color: #202020;
}
.container {
  margin: 40px auto 50px;
  max-width: 960px;
}
.layer {
  background-color: rgba(0, 0, 0, 0.25);
  display: none;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.layer.visible {
  display: block;
}

.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-shadow: 0 0 black;
}
.glyphicon-pencil:before {
    content: "\270f";
}



</style>
<div class="container">
  <div class="profile large">
    <div class="cover"><img src="images/journal/aemcover.jpg"/>
      <div class="layer">
        <div class="loader"></div>
      </div><a class="image-wrapper" href="#">
        <form id="coverForm" action="#">
          <input class="hidden-input" id="changeCover" type="file"/>
          <label class="edit glyphicon glyphicon-pencil" for="changeCover" title="Change cover"></label>
        </form></a>
    </div>
    <div class="user-info">
      <div class="profile-pic"><img src="https://source.unsplash.com/random/300x300"/>
        <div class="layer">
          <div class="loader"></div>
        </div><a class="image-wrapper" href="#">
          <form id="profilePictureForm" action="#">
            <input class="hidden-input" id="changePicture" type="file"/>
            <label class="edit glyphicon glyphicon-pencil" for="changePicture" type="file" title="Change picture"></label>
          </form></a>
      </div>
      <div class="username">
        <div class="name"><span class="verified"></span>@John Doe</div>
        <div class="about">Frontend developer and coffee lover</div>
      </div>
    </div>
  </div>
</div>