

<ul>
    <?php foreach ($owners as $owner) : ?>
        <li>
            <?= $owner->first_name ?>
            <?= $owner->name ?>
            <img src="/images/pets/{{$owner->path}}" />

        </li>
    <?php endforeach; ?>
</ul>