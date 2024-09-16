<?= csrf_field() ?>

<div class="form-floating mb-3">
    <input type="tel" class="form-control" name="phone" inputmode="phone"
           value="<?= old('phone', $instructor['phone'] ?? '') ?>" required>
    <label for="phone">Nr telefonu</label>
</div>

<div class="form-floating mb-3">
                            <textarea class="form-control" name="description" id="description" cols="30"
                                      rows="10"><?= old('description', $instructor['description'] ?? '') ?></textarea>
    <label for="description">Opis</label>
</div>

<div class="mb-3">
    <label for="phone">Jakich języków uczysz?</label>
    <?php foreach ($languages

                   as $language): ?>
        <div class="form-check form-switch">
            <input
                    class="form-check-input"
                    type="checkbox" name="language[]"
                    value="<?= $language['name'] ?>"
                    id="<?= $language['name'] ?>"
                <?php if (isset($instructorLanguages)): ?>
                    <?php foreach ($instructorLanguages as $instructorLanguage): ?>
                        <?php if ($instructorLanguage['language_id'] === $language['id']): ?>
                            checked
                        <?php endif; ?>
                    <?php endforeach ?>
                <?php endif; ?>
            >
            <label class="form-check-label text-left"
                   for="<?= $language['name'] ?>"><?= $language['name'] ?></label>
        </div>
    <?php endforeach; ?>
</div>

<div class="d-grid col-12 col-md-8 mx-auto m-3">
    <button type="submit" class="btn btn-primary btn-block">Potwierdź rejestrację jako
        instruktor
    </button>
</div>