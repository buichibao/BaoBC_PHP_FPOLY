<!-- view -->
<?=$page_content;?> <br>
<select name="course">
    <?php foreach($list_of_course as $course_name): ?>
        <option><?=$course_name?></option>
        <?php endforeach;?>
</select>

