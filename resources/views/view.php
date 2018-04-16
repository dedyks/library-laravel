<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>ISBN</th>
          <th>Title</th>
          <th>Subtitle</th>
          <th>Author</th>
          <th>Publication Date</th>
          <th>Publisher</th>
          <th>Pages</th>
          <th>Description</th>
          <th>Website</th>
        </tr>
      </thead>
  <tbody>

    <?php foreach ($data as $key => $value) {?>
    <tr>
      <td><?php echo $value->ISBN; ?></td>
      <td><?php echo $value->title; ?></td>
      <td><?php echo $value->subtitle; ?></td>
      <td><?php echo $value->author; ?></td>
      <td><?php echo $value->publicationDate; ?></td>
        <td><?php echo $value->publisher; ?></td>
        <td><?php echo $value->pages; ?></td>
        <td><?php echo $value->description; ?></td>
        <td><?php echo $value->website; ?></td>




        <?php } ?>

  </tbody>
    </table>




  </body>
</html>
