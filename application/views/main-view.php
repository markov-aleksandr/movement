
<section class="panel welcome" data-section-name="welcome">
    <div class="subtitle">Створений для боротьби з сидячим образом життя під час карантину.</div>
    <div class="sect-move">
        <img src="/images/Android-rafiki 1.png" alt="">

        <div class="animate__animated slide_text animate__slow animate__fadeInLeftBig"><p>move</p></div>
    </div>
    <div class="subtitle">Рух - запорука здоров'я, щоб хворобам дати відсіч, потрібно займатися спортом. Спорт це те що приносить радість і задоволення.
    </div>
</section>
<script>

</script>
<section class="panel second-sect" data-section-name="about_you">
    <div class="task__inner">
        <div class="title">Інформація про тебе</div>
        <div class="content">
            <img src="/images/Android-amico 2.png" alt="">
            <form class="needs-validation" novalidate method="post" action="/workout/select" id="information">
                <div class="field">

                    <input class="form-control" name="name" type="text" required placeholder="Як тебе звати?">
                    <div class="invalid-feedback">
                        Нам потрібно знати, як до тебе звертатися.
                    </div>

                    <input class="form-control" name="age" type="text" required placeholder="Скільки тобі років?">
                    <div class="invalid-feedback">
                        Нам потрібно знати скільки тобі років.
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<section class="start panel " data-section-name="start">
    <div class="start__content">
        <div class="title">Ви готові почати?</div>

        <button type="submit" id="btn" class="start__btn" form="information">
            Рухнемося
        </button>
    </div>
    <img class="img_start" src="/images/робот.png" alt="">
    <footer>
        <div class="text-center p-3"">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>

    </footer>
</section>
