<h2>Growing Plant</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div><p>Caring for a plant can be hard work, but since you tend to it regularly, you have a plant that grows consistently. Each day, its height increases by a fixed amount represented by the integer <code>upSpeed</code>. But due to lack of sunlight, the plant decreases in height every night, by an amount represented by <code>downSpeed</code>.</p>
<p>Since you grew the plant from a seed, it started at height <code>0</code> initially. Given an integer <code>desiredHeight</code>, your task is to find how many days it'll take for the plant to reach this height.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>upSpeed = 100</code>, <code>downSpeed = 10</code>, and <code>desiredHeight = 910</code>, the output should be<br>
<code>growingPlant(upSpeed, downSpeed, desiredHeight) = 10</code>.</p>
<table>
<thead>
<tr>
<th>#</th>
<th>Day</th>
<th>Night</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>100</td>
<td>90</td>
</tr>
<tr>
<td>2</td>
<td>190</td>
<td>180</td>
</tr>
<tr>
<td>3</td>
<td>280</td>
<td>270</td>
</tr>
<tr>
<td>4</td>
<td>370</td>
<td>360</td>
</tr>
<tr>
<td>5</td>
<td>460</td>
<td>450</td>
</tr>
<tr>
<td>6</td>
<td>550</td>
<td>540</td>
</tr>
<tr>
<td>7</td>
<td>640</td>
<td>630</td>
</tr>
<tr>
<td>8</td>
<td>730</td>
<td>720</td>
</tr>
<tr>
<td>9</td>
<td>820</td>
<td>810</td>
</tr>
<tr>
<td>10</td>
<td>910</td>
<td>900</td>
</tr>
</tbody>
</table>
<p>The plant first reaches a height of <code>910</code> on day <code>10</code>.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 3 seconds (java)</strong></p>
</li>
<li>
<p><strong>[input] integer upSpeed</strong></p>
<p>A positive integer representing the daily growth of the plant.</p>
<p><em>Guaranteed constraints:</em><br>
<code>3 ≤ upSpeed ≤ 100</code>.</p>
</li>
<li>
<p><strong>[input] integer downSpeed</strong></p>
<p>A positive integer representing the nightly decline of the plant.</p>
<p><em>Guaranteed constraints:</em><br>
<code>2 ≤ downSpeed &lt; upSpeed</code>.</p>
</li>
<li>
<p><strong>[input] integer desiredHeight</strong></p>
<p>A positive integer representing the goal height.</p>
<p><em>Guaranteed constraints:</em><br>
<code>4 ≤ desiredHeight ≤ 1000</code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
<ul>
<li>The number of days that it will take for the plant to reach / pass <code>desiredHeight</code>.</li>
</ul>
</li>
</ul>
</div>