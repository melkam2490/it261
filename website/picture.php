<?php

$people = [
    'Albert_Einstein' => [
        'pic1' => 'people1', 
        'description' => 'Albert Einstein (born March 14, 1879, Ulm, Württemberg, Germany—died April 18, 1955, Princeton, New Jersey, U.S.) was a German-born physicist who developed the special and general theories of relativity and won the Nobel Prize for Physics in 1921 for his explanation of the photoelectric effect.'
    ],
    'Mahatma_Gandhi' => [
        'pic1' => 'people2',
        'description' => 'Mahatma Gandhi (October 2, 1869 – January 30, 1948) was an Indian activist who was the leader of the Indian independence movement against British rule. He employed nonviolent civil disobedience and became an inspiration for civil rights movements worldwide.',
    ],
   'Nelson_Rolihlahla' => [
    'pic1' => 'people3',
    'description' => 'Born Rolihlahla Mandela on 18 July 1918 – 5 December 2013, was a South African anti-apartheid activist and politician who served as the first president of South Africa from 1994 to 1999. He was the country\'s first black head of state and the first elected in a fully representative democratic election. His government focused on dismantling the legacy of apartheid by fostering racial reconciliation. Ideologically an African nationalist and socialist, he served as the president of the African National Congress (ANC) party from 1991 to 1997.'
],
'Elon_Musk' => [
    'pic1' => 'people4',
    'description' => 'Elon Reeve Musk (born June 28, 1971) is a businessman known for his key roles in the space company SpaceX and the automotive company Tesla, Inc. Other involvements include ownership of X Corp., the company that operates the social media platform X (formerly Twitter), and his role in the founding of the Boring Company, xAI, Neuralink, and OpenAI.'
],
'Oprah_Winfrey ' => [
    'pic1' => 'people5',
    'description' => 'Oprah Gail Winfrey born Orpah Gail Winfrey; January 29, 1954, known mononymously as Oprah, is an American talk show host, television producer, actress, author, and media proprietor. She is best known for her talk show, The Oprah Winfrey Show, broadcast from Chicago, which ran in national syndication for 25 years, from 1986 to 2011.[3][4] Dubbed the "Queen of All Media", she was the richest African-American of the 20th century and was once the world\'s only black billionaire.[8] By 2007, she was often ranked as the most influential woman in the world.'
],
'Frida_Kahlo ' => [
    'pic1' => 'people6',
    'description' => 'Magdalena Carmen Frida Kahlo y Calderón[a] (Spanish pronunciation: 6 July 1907 – 13 July 1954 was a Mexican painter known for her many portraits, self-portraits, and works inspired by the nature and artifacts of Mexico. Inspired by the country\'s popular culture, she employed a naïve folk art style to explore questions of identity, postcolonialism, gender, class, and race in Mexican society. Her paintings often had strong autobiographical elements and mixed realism with fantasy.'
],
'Serena_Williams ' => [
    'pic1' => 'people7',
    'description' => 'Serena Jameka Williams (born September 26, 1981) is an American former professional tennis player. Widely regarded as one of the greatest tennis players of all time,she was ranked world No. 1 in singles by the Women\'s Tennis Association (WTA) for 319 weeks, including a joint-record 186 consecutive weeks, and finished as the year-end No. 1 five times. She won 23 Grand Slam women\'s singles titles, the most in the Open Era, and the second-most of all time. She is the only player to accomplish a Career Golden Slam in both singles and doubles.'
],
];
?>



    <h1>Welcome To My Famous People Gallary</h1>

    <div class="table-container">
        <table>
            <?php foreach($people as $name => $person): ?>
                <tr>
                    <!-- Left-side image (type 1) -->
                    <td>
              <img src="image1/<?php echo $person['pic1']; ?>.jpg" 
         alt="<?php echo str_replace('_', ' ', $name); ?>"  
         style="width: 50%; height: 150px;" >
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
