<h2>Matrix Elements Sum</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div><p>After becoming famous, the CodeBots decided to move into a new building together. Each of the rooms has a different cost, and some of them are free, but there's a rumour that all the free rooms are haunted! Since the CodeBots are quite superstitious, they refuse to stay in any of the free rooms, <strong>or any of the rooms below any of the free rooms</strong>.</p>
<p>Given <code>matrix</code>, a rectangular matrix of integers, where each value represents the cost of the room, your task is to return the total sum of all rooms that are suitable for the CodeBots (ie: add up all the values that don't appear below a <code>0</code>).</p>
<p><strong>Example</strong></p>
<ul>
<li>
<p>For</p>
<pre><code>matrix = [[0, 1, 1, 2], 
          [0, 5, 0, 0], 
          [2, 0, 3, 3]]
</code></pre>
<p>the output should be<br>
<code>matrixElementsSum(matrix) = 9</code>.</p>
<p><img src="https://codesignal.s3.amazonaws.com/tasks/matrixElementsSum/img/example1.png?_tm=1582038746746" alt="example 1"></p>
<p>There are several haunted rooms, so we'll disregard them as well as any rooms beneath them. Thus, the answer is <code>1 + 5 + 1 + 2 = 9</code>.</p>
</li>
<li>
<p>For</p>
<pre><code>matrix = [[1, 1, 1, 0], 
          [0, 5, 0, 1], 
          [2, 1, 3, 10]]
</code></pre>
<p>the output should be<br>
<code>matrixElementsSum(matrix) = 9</code>.</p>
<p><img src="https://codesignal.s3.amazonaws.com/tasks/matrixElementsSum/img/example2.png?_tm=1582038747009" alt="example 2"></p>
<p>Note that the free room in the final column makes the full column unsuitable for bots (not just the room directly beneath it). Thus, the answer is <code>1 + 1 + 1 + 5 + 1 = 9</code>.</p>
</li>
</ul>
<p><span style="color:#2b3b52;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (php)</strong></p>
</li>
<li>
<p><strong>[input] array.array.integer matrix</strong></p>
<p>A 2-dimensional array of integers representing the cost of each room in the building. A value of <code>0</code> indicates that the room is haunted.</p>
<p><em>Guaranteed constraints:</em><br>
<code>1 ≤ matrix.length ≤ 5</code>,<br>
<code>1 ≤ matrix[i].length ≤ 5</code>,<br>
<code>0 ≤ matrix[i][j] ≤ 10</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>The total price of all the rooms that are suitable for the CodeBots to live in.</li>
</ul>
</li>
</ul>
</div>