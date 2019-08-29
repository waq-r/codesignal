<h2>Knapsack Light</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div><p>You found two items in a treasure chest! The first item weighs <code>weight1</code> and is worth <code>value1</code>, and the second item weighs <code>weight2</code> and is worth <code>value2</code>. What is the total maximum value of the items you can take with you, assuming that your max weight capacity is <code>maxW</code> and you can't come back for the items later?</p>
<p><strong>Note</strong> that there are only two items and you can't bring more than one item of each type, i.e. you can't take two first items or two second items.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>value1 = 10</code>, <code>weight1 = 5</code>, <code>value2 = 6</code>, <code>weight2 = 4</code>, and <code>maxW = 8</code>, the output should be<br>
<code>knapsackLight(value1, weight1, value2, weight2, maxW) = 10</code>.</p>
<p>You can only carry the first item.</p>
</li>
<li>
<p>For <code>value1 = 10</code>, <code>weight1 = 5</code>, <code>value2 = 6</code>, <code>weight2 = 4</code>, and <code>maxW = 9</code>, the output should be<br>
<code>knapsackLight(value1, weight1, value2, weight2, maxW) = 16</code>.</p>
<p>You're strong enough to take both of the items with you.</p>
</li>
<li>
<p>For <code>value1 = 5</code>, <code>weight1 = 3</code>, <code>value2 = 7</code>, <code>weight2 = 4</code>, and <code>maxW = 6</code>, the output should be<br>
<code>knapsackLight(value1, weight1, value2, weight2, maxW) = 7</code>.</p>
<p>You can't take both items, but you can take any of them.</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] integer value1</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ value1 ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer weight1</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ weight1 ≤ 10</code>.</p>
</li>
<li>
<p><strong>[input] integer value2</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ value2 ≤ 20</code>.</p>
</li>
<li>
<p><strong>[input] integer weight2</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ weight2 ≤ 10</code>.</p>
</li>
<li>
<p><strong>[input] integer maxW</strong></p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ maxW ≤ 20</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
</li>
</ul>
</div>