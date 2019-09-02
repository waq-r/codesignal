<h2>Elections Winners</h2>
<p>source: <a href="https://www.codesignal.com/">codesignal.com</a>
<div class="markdown"><p>Elections are in progress!</p>
<p>Given an array of the numbers of votes given to each of the candidates so far, and an integer <code>k</code> equal to the number of voters who haven't cast their vote yet, find the number of candidates who still have a chance to win the election.</p>
<p>The winner of the election must secure strictly more votes than any other candidate. If two or more candidates receive the same (maximum) number of votes, assume there is no winner at all.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<p>For <code>votes = [2, 3, 5, 2]</code> and <code>k = 3</code>, the output should be<br>
<code>electionsWinners(votes, k) = 2</code>.</p>
<ul>
<li>The first candidate got <code>2</code> votes. Even if all of the remaining <code>3</code> candidates vote for him, he will still have only <code>5</code> votes, i.e. the same number as the third candidate, so there will be no winner.</li>
<li>The second candidate can win if all the remaining candidates vote for him (<code>3 + 3 = 6 &gt; 5</code>).</li>
<li>The third candidate can win even if none of the remaining candidates vote for him. For example, if each of the remaining voters cast their votes for each of his opponents, he will still be the winner (the <code>votes</code> array will thus be <code>[3, 4, 5, 3]</code>).</li>
<li>The last candidate can't win no matter what (for the same reason as the first candidate).</li>
</ul>
<p>Thus, only <code>2</code> candidates can win (the second and the third), which is the answer.</p>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] array.integer votes</strong></p>
<p>A non-empty array of non-negative integers. Its <code>i<sup>th</sup></code> element denotes the number of votes cast for the <code>i<sup>th</sup></code> candidate.</p>
<p><em>Guaranteed constraints:</em><br>
<code>4 ≤ votes.length ≤ 10<sup>5</sup></code>,<br>
<code>0 ≤ votes[i] ≤ 10<sup>4</sup></code>.</p>
</li>
<li>
<p><strong>[input] integer k</strong></p>
<p>The number of voters who haven't cast their vote yet.</p>
<p><em>Guaranteed constraints:</em><br>
<code>0 ≤ k ≤ 10<sup>5</sup></code>.</p>
</li>
<li>
<p><strong>[output] integer</strong></p>
</li>
</ul>
</div>