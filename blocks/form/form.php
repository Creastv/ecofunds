<?php
$headline = get_field('hedline');
$subhead = get_field('subhead');
$img = get_field('img');
$desc = get_field( 'desc' );
?>

<div class="b-form">
    <div class="container">
        <div class="row">
            <div class="b-form__wraper">
                <div class="b-form__col">
                    <div class="img" style="background-image: url(<?php echo $img; ?>);"></div>
                    <!-- <div class="go__bg"></div>
                    <div class="go_bg__two"></div> -->
                </div>
                <div class="b-form__col">
                    <?php if ($headline) { ?>
                    <h3 class="section-h"><?php echo $headline; ?></h3>
                    <?php } ?>
                    <?php if ($subhead) { ?>
                    <h2 class="subhead-h"><?php echo $subhead; ?></h2>
                    <?php } ?>
                    <?php if ($desc) { ?>
                    <?php echo $desc; ?>
                    <?php } ?>
                    <div class="b-form__form">
                        <div class="form-wraper">
                            <form method="POST" action="https://moovin.activehosted.com/proc.php" id="_form_13_" class="_form _form_13 _inline-form _dark" novalidate>
                                <input type="hidden" name="u" value="13" />
                                <input type="hidden" name="f" value="13" />
                                <input type="hidden" name="s" />
                                <input type="hidden" name="c" value="0" />
                                <input type="hidden" name="m" value="0" />
                                <input type="hidden" name="act" value="sub" />
                                <input type="hidden" name="v" value="2" />
                                <input type="hidden" name="or" value="f37960bf3de557ef6f6f3c536a0b104e" />
                                <div class="_form-content">
                                    <div class="control-wrap">
                                        <div class="_form_element _x43120871 _full_width">
                                            <label for="firstname" class="_form-label"> </label>
                                            <div class="_field-wrapper">
                                                <input type="text" id="firstname" name="firstname" placeholder="Imię" required />
                                            </div>
                                        </div>
                                        <div class="_form_element _x02498679 _full_width">
                                            <label for="lastname" class="_form-label"> </label>
                                            <div class="_field-wrapper">
                                                <input type="text" id="lastname" name="lastname" placeholder="Nazwisko" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-wrap">
                                        <div class="_form_element _x82275221 _full_width">
                                            <label for="email" class="_form-label"> </label>
                                            <div class="_field-wrapper">
                                                <input type="text" id="email" name="email" placeholder="Adres e-mail" required />
                                            </div>
                                        </div>
                                        <div class="_form_element _x81019857 _full_width">
                                            <label for="phone" class="_form-label"> </label>
                                            <div class="_field-wrapper">
                                                <input type="text" id="phone" name="phone" placeholder="Nr kontaktowy" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="_form_element _x95887296 _full_width">
                                        <fieldset class="_form-fieldset">
                                            <div class="_row">
                                                <legend for="field[5][]" class="_form-label"></legend>
                                            </div>
                                            <input data-autofill="false" type="hidden" id="field[5][]" name="field[5][]" value="~|" />
                                            <div class="_row _checkbox-radio">
                                                <input id="field_5" type="checkbox" name="field[5][]" value="Zapoznałem się z Polityką Prywatności i wyrażam zgodę na przetwarzanie moich danych osobowych." class="any" required />
                                                <span>
                                                    <label for="field_5">
                                                        Wyrażam zgodę na przetwarzanie podanych w formularzu moich danych osobowych przez operatora serwisu dfkinvestments.com (DFK Investments Dawid Forysiak, Ul. Przyokopowa 33, 01-208 Warszawa) w zakresie niezbędnym do realizacji niniejszego zgłoszenia. Jednocześnie przyjmuję do wiadomości w żadnej postaci. Podanie danych w formularzu jest dobrowolne, ale niezbędne do przetworzenia zapytania. Posiada Pani/Pan prawo dostępu do treści swoich danych i ich sprostowania, usunięcia, ograniczenia przetwarzania, prawo do przenoszenia danych, prawo do cofnięcia zgody w dowolnym momencie bez wpływu na zgodność z prawem przetwarzania.</a>
                                                    </label>
                                                </span>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="_button-wrapper _full_width text-right">
                                        <button id="_form_13_submit" class="_submit btn" type="submit">Wyślij zgłoszenie</button>
                                    </div>
                                    <div class="_clear-element"></div>
                                </div>
                                <div class="_form-thank-you" style="display: none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
