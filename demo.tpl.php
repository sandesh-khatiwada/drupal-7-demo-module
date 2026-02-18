  <?php
  /**
   * @file
   * demo.tpl.php - Template for demo data table
   *
   * Available variables:
   * - $header     array   Table header labels
   * - $rows       array   Array of row data (each is associative array)
   */
  ?>

  <div class="demo-data-table-wrapper">

    <h2>Demo Records</h2>

    <?php if (empty($rows)): ?>
      <p>No records found.</p>
    <?php else: ?>

      <?php
        
        $table_rows = array();
        foreach ($rows as $row) {
          $table_rows[] = array(
            $row['id'],
            check_plain($row['title']),
            check_plain($row['description'] ?: '—'),
            $row['weight'],
            format_date($row['created'], 'short'),
          );
        }
      ?>  

      <?php print theme('table', array(
        'header'     => $header,
        'rows'       => $table_rows,
        'attributes' => array('class' => array('demo-data-table')),
        'empty'      => t('No records available.'),
      )); ?>

    <?php endif; ?>

  </div>

  <style>
    .demo-data-table {
      width: 100%;
      border-collapse: collapse;
      margin: 1em 0;
    }
    .demo-data-table th,
    .demo-data-table td {
      border: 1px solid #082635;
      padding: 8px;
      text-align: left;
    }
    .demo-data-table th {
      background: #13458b;
      font-weight: bold;
      color: white;
    }
    .demo-data-table tr:nth-child(even) {
      background: #21b0f1;
    }
  </style>