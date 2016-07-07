<form  action="create.php" method="post">
  <fieldset>
    <label for="category">Категория</label>
    <select  name="category">
      <option value="sport">Спорт</option>
      <option value="health">Здраве</option>
      <option value="culture">Култура</option>
      <option value="science">Наука</option>
    </select>
  </fieldset>
  <fieldset>
    <label for="name">Име на събитието</label>
    <input type="text" name="name">
  </fieldset>
  <fieldset>
    <textarea name="description" rows="10" cols="30" placeholder="Въведете описание."></textarea>
  </fieldset>
  <fieldset>

    <input type="submit" name="submit" value="Създай">
  </fieldset>
</form>
