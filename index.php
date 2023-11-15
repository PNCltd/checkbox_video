
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="form">
  <form>
    <div class="field">
      <label for="username">Name</label>
      <input id="username" name="username" type="text" value="Vorname Nachname">
    </div>
    <div class="field">
      <label for="email">E-Mail Adresse</label>
      <input id="email" name="email" type="email" value="ihre@email.com">
    </div>
    <div class="field">
      <label for="password">Handicap</label>
      <input id="password" name="password" type="text" value="z.B. 3">
    </div>
    <div class="field">
      <label for="rpassword">Gäste</label>
      <input id="rpassword" name="rpassword" type="text" value="z.B. 2">
    </div>
    <div class="checkbox">
      <input id="check" name="checkbox" type="checkbox">
      <label for="checkbox">Ich bin einverstanden dass mich die Leute kontaktieren Ich bin einverstanden dass mich die Leute kontaktieren Ich bin einverstanden dass mich die Leute kontaktieren Ich bin einverstanden dass mich die Leute kontaktieren</label>
    </div>
    <input type="submit" name="anmelden" class="button" id="btncheck" value="Anmelden" disabled />
  </form>
</div>

<script type="text/javascript">
  $('#check').change(function() {
  $('#btncheck').prop("disabled", !this.checked);
});
</script>
<style>
  .form input[type="checkbox"] label {
  background: #000;
  height: 30px;
  border: none;
}

.form .button {
  cursor: pointer;
  display: block;
  background: rgba(46, 204, 113, 1.0);
  width: 180px;
  margin: 0 auto;
  margin-bottom: 40px;
  padding: 16px 0;
  border: none;
  border-radius: 100px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  transition: 0.2s linear;
}

.form .button[disabled] {
  background-color: rgba(128, 128, 128);
  pointer-events: none;
}

.form .button:hover {
  background: rgba(46, 204, 113, 0.5);
}
</style>