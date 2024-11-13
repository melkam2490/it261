<?php
// Associative array of famous people with image file names and descriptions
$people = [
    'Albert_Einstein' => [
        'pic1' => 'people1', 
        'description' => 'Albert Einstein (born March 14, 1879, Ulm, Württemberg, Germany—died April 18, 1955, Princeton, New Jersey, U.S.) was a German-born physicist who developed the special and general theories of relativity and won the Nobel Prize for Physics in 1921 for his explanation of the photoelectric effect.'
    ],
    'Mahatma_Gandhi' => [
        'pic1' => 'people2',
        'description' => 'Mahatma Gandhi (October 2, 1869 – January 30, 1948) was an Indian activist who was the leader of the Indian independence movement against British rule. He employed nonviolent civil disobedience and became an inspiration for civil rights movements worldwide.',
    ],
   
];
?>


<body>

    <h1>Welcome My Famous People Gallary</h1>

    <div class="table-container">
        <table>
            <?php foreach($people as $name => $person): ?>
                <tr>
                    <!-- Left-side image (type 1) -->
                    <td>
                        <img src="image1/<?php echo $person['pic1']; ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"  width="60%" height="100" />
                    </td>

                    <!-- Name -->
                    <td class="name"><?php echo str_replace('_', ' ', $name); ?> </td>
                    
                    <!-- Right-side description (full) -->
                    <td class="description">
                        <?php echo $person['description']; ?> <!-- Full description -->
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>
