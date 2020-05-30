<?php

?>
<h2>Neuer Patient:</h2>
<form>
    <div class="form-group row">
        <label for="vorname" class="col-sm-2 col-form-label offset-sm-2">Vorname</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="vorname" id="vorname">
        </div>
    </div>
    <div class="form-group row">
        <label for="nachname" class="col-sm-2 col-form-label offset-sm-2">Nachname</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="nachname" id="nachname">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label offset-sm-2">Email</label>
        <div class="col-sm-6">
            <input type="email" class="form-control" name="email" id="email">
        </div>
    </div>
    <div class="form-group row">
        <label for="svn" class="col-sm-2 col-form-label offset-sm-2">Sozialversicherungsnummer</label>
        <div class="col-sm-6">
            <input type="number" class="form-control" name="svn" id="svn">
        </div>
    </div>

    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0 offset-sm-2">Geschlecht</legend>
            <div class="col-sm-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        First radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Second radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                    <label class="form-check-label" for="gridRadios3">
                        Third radio
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>