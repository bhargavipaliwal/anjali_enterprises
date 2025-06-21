
    <a href="#!" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core.min.js"></script> 
    <script src="<?= base_url() ?>assets/search/search.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script src="<?= base_url() ?>assets/quform/js/plugins.js"></script>
    <script src="<?= base_url() ?>assets/quform/js/scripts.js"></script>
    <script>
       

const inputs = document.querySelectorAll("input");
const div = document.querySelector("li");

function handleInputChange() {
  const units = this.dataset.units || "";

  document.documentElement.style.setProperty(
    `--${this.name}`,
    this.value + units
  );
}

inputs.forEach((input) => input.addEventListener("input", handleInputChange));
var range = $("input#range"),
  value = $(".range-value");
value.html(range.attr("value"));
range.on("input", function () {
  value.html(this.value);
});

    </script>

</body>



</html>