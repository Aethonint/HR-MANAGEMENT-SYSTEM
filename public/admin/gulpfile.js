const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");
const uglifycss = require("gulp-uglifycss");
const browserSync = require("browser-sync").create();
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");

paths = {
  npm: "./node_modules",
};

function scss() {
  return gulp
    .src(["scss/**/*.scss", "scss/*.scss"])
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(uglifycss())
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest("app/assets/css/"));
}

//Copy, compile, minify all scripts

function common(done) {
  gulp
    .src([
      paths.npm + "/jquery/dist/jquery.js",
      paths.npm + "/materialize-css/dist/js/materialize.min.js",
      paths.npm + "/jquery-ui-dist/jquery-ui.min.js",
      paths.npm + "/@popperjs/core/dist/umd/popper.js",
      paths.npm + "/bootstrap/dist/js/bootstrap.js",
      paths.npm + "/jquery-slimscroll/jquery.slimscroll.min.js",
      paths.npm + "/node-waves/dist/waves.js",
      paths.npm + "/moment/min/moment.min.js",
      paths.npm + "/feather-icons/dist/feather.js",
    ])
    .pipe(concat("common.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest("app/assets/js/"));
  done();
}

function bundles(done) {
  gulp
    .src([
      paths.npm + "/jquery-validation/dist/jquery.validate.js",
      paths.npm + "/bootstrap-sweetalert/dist/sweetalert.min.js",
      paths.npm + "/jquery-countto/jquery.countTo.js",
      paths.npm + "/jquery-sparkline/jquery.sparkline.min.js",
      paths.npm + "/bootstrap-notify/bootstrap-notify.min.js",
      paths.npm + "/owl.carousel/dist/owl.carousel.min.js",
      paths.npm + "/dragula/dist/dragula.min.js",
      paths.npm + "/morris.js/morris.js",
      paths.npm + "/raphael/raphael.min.js",
      paths.npm + "/chart.js/dist/chart.js",
      paths.npm + "/apexcharts/dist/apexcharts.min.js",
      paths.npm + "/echarts/dist/echarts.min.js",
      paths.npm + "/jquery-knob/dist/jquery.knob.min.js",
      paths.npm + "/autosize/dist/autosize.js",
      paths.npm + "/dropzone/dist/dropzone.js",
      paths.npm + "/inputmask/dist/jquery.inputmask.min.js",
      paths.npm + "/jquery.spinner/dist/js/jquery.spinner.js",
      paths.npm + "/bootstrap-tagsinput/dist/bootstrap-tagsinput.js",
      paths.npm + "/select2/dist/js/select2.min.js",
      paths.npm + "/flatpickr/dist/flatpickr.min.js",
      paths.npm +
        "/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js",
      paths.npm + "/jquery-steps/build/jquery.steps.min.js",
    ])
    .pipe(uglify())
    .pipe(gulp.dest("app/assets/js/bundles/"));
  done();
}
//Copy, compile, minify all table script
function table(done) {
  gulp
    .src([
      paths.npm + "/datatables.net/js/dataTables.min.js",
      paths.npm + "/datatables.net-bs5/js/dataTables.bootstrap5.min.js",
    ])
    .pipe(concat("table.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest("app/assets/js/"));
  done();
}

//Copy, compile, minify all map script
function map(done) {
  gulp
    .src([
      paths.npm + "/gmaps/gmaps.js",
      paths.npm + "/jqvmap/dist/jquery.vmap.min.js",
      paths.npm + "/jqvmap/dist/maps/jquery.vmap.world.js",
      paths.npm + "/jqvmap/dist/maps/jquery.vmap.usa.js",
      paths.npm + "/jqvmap/dist/maps/jquery.vmap.russia.js",
      paths.npm + "/jqvmap/dist/maps/jquery.vmap.europe.js",
      paths.npm + "/jqvmap/dist/maps/jquery.vmap.germany.js",
    ])
    .pipe(concat("map.min.js"))
    .pipe(uglify())
    .pipe(gulp.dest("app/assets/js/"));
  done();
}

//Copy, compile, minify all plugins styles
function commonStyles(done) {
  return gulp
    .src([
      paths.npm + "/materialize-css/dist/css/materialize.min.css",
      paths.npm + "/bootstrap/dist/css/bootstrap.css",
      paths.npm + "/node-waves/dist/waves.css",
      paths.npm + "/animate.css/animate.css",
    ])
    .pipe(concat("common.min.css"))
    .pipe(
      autoprefixer({
        overrideBrowserslist: ["last 2 versions"],
        cascade: false,
      })
    )
    .pipe(uglifycss())
    .pipe(gulp.dest("app/assets/css/"));
  done();
}
function bundlesStyles(done) {
  return gulp
    .src([
      paths.npm + "/simple-line-icons/css/simple-line-icons.css",
      paths.npm + "/morris.js/morris.css",
      paths.npm + "/bootstrap-sweetalert/dist/sweetalert.css",
      paths.npm + "/jqvmap/dist/jqvmap.min.css",
      paths.npm + "/datatables.net-bs5/css/dataTables.bootstrap5.min.css",
      paths.npm + "/owl.carousel/dist/assets/owl.carousel.min.css",
      paths.npm + "/owl.carousel/dist/assets/owl.theme.default.min.css",
      paths.npm + "/materialize-css/extras/noUiSlider/nouislider.css",
    ])
    .pipe(
      autoprefixer({
        overrideBrowserslist: ["last 2 versions"],
        cascade: false,
      })
    )
    .pipe(uglifycss())
    .pipe(gulp.dest("app/assets/css/bundles/"));
  done();
}

//Copy, compile, minify all forms styles
function formStyle(done) {
  return gulp
    .src([
      paths.npm + "/dropzone/dist/dropzone.css",
      paths.npm + "/jquery.spinner/dist/css/bootstrap-spinner.css",
      paths.npm + "/bootstrap-tagsinput/dist/bootstrap-tagsinput.css",
      paths.npm + "/nouislider/dist/nouislider.min.css",
      paths.npm + "/select2/dist/css/select2.min.css",
      paths.npm + "/flatpickr/dist/flatpickr.min.css",
      paths.npm +
        "/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css",
    ])
    .pipe(concat("form.min.css"))
    .pipe(
      autoprefixer({
        overrideBrowserslist: ["last 2 versions"],
        cascade: false,
      })
    )
    .pipe(uglifycss())
    .pipe(gulp.dest("app/assets/css/"));
  done();
}

function watch() {
  browserSync.init({
    server: {
      baseDir: "./app",
    },
  });
  gulp.watch("scss/**/*.scss", scss);
  gulp.watch("scss/*.scss", scss);
  gulp
    .watch(["app/*.html", "app/**/**/*.html"])
    .on("change", browserSync.reload);
  gulp
    .watch(["app/assets/js/**/*.js", "app/assets/js/*.js"])
    .on("change", browserSync.reload);
}

gulp.task("scss", scss);
gulp.task("common", common);
gulp.task("bundles", bundles);
gulp.task("map", map);
gulp.task("table", table);
gulp.task("commonStyles", commonStyles);
gulp.task("bundlesStyles", bundlesStyles);
gulp.task("formStyle", formStyle);
gulp.task("watch", watch);

gulp.task(
  "default",
  gulp.series(
    scss,
    common,
    bundles,
    map,
    table,
    commonStyles,
    bundlesStyles,
    formStyle
  )
);
