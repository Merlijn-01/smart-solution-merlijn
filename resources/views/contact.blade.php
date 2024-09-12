<x-layouts.app title="contact">
    <div class="container">
        <div class="contact-content">
            <h1>Contacteer Ons</h1>
            <p>Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in en wij nemen zo snel mogelijk contact met je op!</p>
            <form>
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" required>

                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">Onderwerp</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">Bericht</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit"><span>Verstuur</span></button>
            </form>
        </div>
    </div>
</x-layouts.app>
