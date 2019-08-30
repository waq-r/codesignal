<h2>Bishop and Pawn</h2>
source: <a href="https://www.codesignal.com/">www.codesignal.com</a>
<div class="markdown"><p>Given the positions of a white <code>bishop</code> and a black <code>pawn</code> on the standard chess board, determine whether the bishop can capture the pawn in one move.</p>
<p>The bishop has no restrictions in distance for each move, but is limited to diagonal movement. Check out the example below to see how it can move:<br>
https://codesignal.s3.amazonaws.com/tasks/bishopAndPawn/img/bishop.jpg?_tm=1551432802825</p>
<p><span style="color:#44BFA3;font-size:1.4em">Example</span></p>
<ul>
<li>
<p>For <code>bishop = "a1"</code> and <code>pawn = "c3"</code>, the output should be<br>
<code>bishopAndPawn(bishop, pawn) = true</code>.</p>
<p>https://codesignal.s3.amazonaws.com/tasks/bishopAndPawn/img/ex1.jpg?_tm=1551432803102</p>
</li>
<li>
<p>For <code>bishop = "h1"</code> and <code>pawn = "h3"</code>, the output should be<br>
<code>bishopAndPawn(bishop, pawn) = false</code>.</p>
<p>https://codesignal.s3.amazonaws.com/tasks/bishopAndPawn/img/ex2.jpg?_tm=1551432803350</p>
</li>
</ul>
<p><span style="color:#44BFA3;font-size:1.4em">Input/Output</span></p>
<ul>
<li>
<p><strong>[execution time limit] 4 seconds (js)</strong></p>
</li>
<li>
<p><strong>[input] string bishop</strong></p>
<p>Coordinates of the white bishop in the <a href="keyword://chess-notation" target="_blank">chess notation</a>.</p>
<p><em>Guaranteed constraints:</em><br>
<code>bishop.length = 2</code>,<br>
<code>'a' ≤ bishop[0] ≤ 'h'</code>,<br>
<code>1 ≤ bishop[1] ≤ 8</code>.</p>
</li>
<li>
<p><strong>[input] string pawn</strong></p>
<p>Coordinates of the black pawn in the same notation.</p>
<p><em>Guaranteed constraints:</em><br>
<code>pawn.length = 2</code>,<br>
<code>'a' ≤ pawn[0] ≤ 'h'</code>,<br>
<code>1 ≤ pawn[1] ≤ 8</code>.</p>
</li>
<li>
<p><strong>[output] boolean</strong></p>
<ul>
<li><code>true</code> if the bishop can capture the pawn, <code>false</code> otherwise.</li>
</ul>
</li>
</ul>
</div>