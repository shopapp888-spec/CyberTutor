<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quiz — Password Security</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root{
            --bg-0: #0d1117;
            --bg-1: #161b22;
            --card: #1c1f24;
            --muted: #8b949e;
            --accent-green: #00c853;
            --accent-blue: #58a6ff;
            --text: #e6edf3;
        }
        body {
            background: linear-gradient(135deg, var(--bg-0), var(--bg-1));
            color: var(--text);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            padding-bottom: 60px;
        }
        .container { max-width: 900px; }

        .card {
            background: var(--card);
            border: 1px solid #2c3136;
            border-radius: 12px;
            color: var(--text);
            box-shadow: 0 6px 18px rgba(0,0,0,0.45);
        }

        h1, h2 { color: var(--accent-blue); }
        .question-title { color: var(--accent-green); }
        .btn-primary {
            background-color: var(--accent-green);
            border: none;
            border-radius: 10px;
        }
        .btn-primary:hover { background-color: #00e676; color: #041012; }
        .btn-outline-light { color: var(--text); border-color: rgba(255,255,255,0.06); }

        .answer.correct { border-left: 4px solid var(--accent-green); background: rgba(0,200,83,0.06); }
        .answer.wrong { border-left: 4px solid #ef5350; background: rgba(239,83,80,0.04); }
        .small-muted { color: var(--muted); }
        .result-box { background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.04); padding: 18px; border-radius: 10px; }
    </style>
</head>
<body>
    <div class="container py-5">
        <a href="/password" class="btn btn-outline-light mb-3">&larr; Kembali ke Kelas</a>

        <div class="card p-4 mb-4">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h1 class="mb-1">Quiz: Password Security</h1>
                    <p class="small-muted mb-0">Uji pengetahuanmu tentang cara membuat dan menjaga keamanan password.</p>
                </div>
                <div class="text-end">
                    <div class="small-muted">Poin per jawaban benar</div>
                    <div class="h5 mb-0 text-success">+2 Poin</div>
                </div>
            </div>

            <hr class="my-3">

            <form id="quiz-form" method="POST" action="/quiz/password-security/submit">
                @csrf

                <!-- Question 1 -->
                <div class="mb-4">
                    <h5 class="question-title">1. Password yang kuat sebaiknya memiliki:</h5>
                    <div class="list-group">
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q1" value="a">
                            a) Hanya huruf kecil dan angka
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q1" value="b">
                            b) Kombinasi huruf besar, huruf kecil, angka, dan simbol
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q1" value="c">
                            c) Nama lengkap pengguna
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q1" value="d">
                            d) Hanya 4 karakter agar mudah diingat
                        </label>
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="mb-4">
                    <h5 class="question-title">2. Mengapa tidak disarankan menggunakan password yang sama untuk banyak akun?</h5>
                    <div class="list-group">
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q2" value="a">
                            a) Agar lebih mudah diingat
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q2" value="b">
                            b) Karena jika satu akun diretas, akun lain juga bisa ikut diretas
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q2" value="c">
                            c) Karena sistem tidak mengizinkan
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q2" value="d">
                            d) Karena semua situs memiliki sistem keamanan yang sama
                        </label>
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="mb-4">
                    <h5 class="question-title">3. Apa fungsi dari password manager?</h5>
                    <div class="list-group">
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q3" value="a">
                            a) Menyimpan dan membuat password kuat secara aman
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q3" value="b">
                            b) Menghapus semua password lama secara otomatis
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q3" value="c">
                            c) Membagikan password ke teman
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q3" value="d">
                            d) Mengunci browser agar tidak bisa digunakan
                        </label>
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="mb-4">
                    <h5 class="question-title">4. Apa yang dimaksud dengan two-factor authentication (2FA)?</h5>
                    <div class="list-group">
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q4" value="a">
                            a) Login hanya dengan password
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q4" value="b">
                            b) Login menggunakan dua langkah verifikasi seperti password dan kode OTP
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q4" value="c">
                            c) Menggunakan dua akun secara bersamaan
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q4" value="d">
                            d) Login tanpa password
                        </label>
                    </div>
                </div>

                <!-- Question 5 -->
                <div class="mb-4">
                    <h5 class="question-title">5. Apa yang sebaiknya dilakukan jika kamu curiga passwordmu bocor?</h5>
                    <div class="list-group">
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q5" value="a">
                            a) Abaikan, karena mungkin tidak serius
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q5" value="b">
                            b) Segera ubah password dan aktifkan 2FA
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q5" value="c">
                            c) Gunakan password lama di akun lain
                        </label>
                        <label class="list-group-item answer">
                            <input class="form-check-input me-2" type="radio" name="q5" value="d">
                            d) Posting keluhan di media sosial
                        </label>
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button id="submit-btn" type="button" class="btn btn-primary">Submit Jawaban</button>
                    <button id="reset-btn" type="button" class="btn btn-outline-light">Reset</button>
                </div>
            </form>
        </div>

        <!-- Result card -->
        <div id="result-card" class="card p-4 mb-4" style="display:none;">
            <h4>Hasil Quiz</h4>
            <div id="result-content" class="result-box mt-3"></div>
        </div>

        <p class="small-muted text-center">Ingat: skor final juga akan dikirim ke server jika endpoint tersedia.</p>
    </div>

    <script>
        (function(){
            const answers = {
                q1: 'b',
                q2: 'b',
                q3: 'a',
                q4: 'b',
                q5: 'b'
            };

            const pointsPerCorrect = 2;
            const submitBtn = document.getElementById('submit-btn');
            const resetBtn = document.getElementById('reset-btn');
            const resultCard = document.getElementById('result-card');
            const resultContent = document.getElementById('result-content');

            function getSelected(name) {
                const el = document.querySelector('input[name="'+name+'"]:checked');
                return el ? el.value : null;
            }

            function evaluate() {
                let total = 0;
                let correctCount = 0;
                const details = [];

                for (let i=1;i<=5;i++) {
                    const q = 'q'+i;
                    const selected = getSelected(q);
                    const correct = answers[q];

                    const isCorrect = selected === correct;
                    if (isCorrect) {
                        correctCount++;
                        total += pointsPerCorrect;
                    }

                    details.push({ question: q, selected, correct, isCorrect });

                    document.querySelectorAll('input[name="'+q+'"]').forEach(inp=>{
                        inp.closest('label').classList.remove('correct','wrong');
                    });
                }

                details.forEach(d=>{
                    if (!d.selected) return;
                    const selector = 'input[name="'+d.question+'"][value="'+d.selected+'"]';
                    const input = document.querySelector(selector);
                    if (!input) return;
                    const label = input.closest('label');
                    if (d.isCorrect) label.classList.add('correct'); else label.classList.add('wrong');
                });

                return { total, correctCount, details };
            }

            async function submitToServer(payload) {
                try {
                    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                    const res = await fetch('/quiz/password-security/submit', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': token
                        },
                        body: JSON.stringify(payload)
                    });
                    if (!res.ok) {
                        const txt = await res.text();
                        console.warn('Server response:', res.status, txt);
                        return { ok: false, status: res.status, text: txt };
                    }
                    const data = await res.json();
                    return { ok: true, data };
                } catch (e) {
                    console.warn('Error submitting to server:', e);
                    return { ok: false, error: e.message };
                }
            }

            submitBtn.addEventListener('click', async function(){
                const result = evaluate();
                resultCard.style.display = 'block';
                resultContent.innerHTML = `
                    <p>Kamu menjawab <strong>${result.correctCount}</strong> dari 5 benar.</p>
                    <p>Total poin didapat: <strong>${result.total}</strong></p>
                    <hr>
                    <ul>
                        ${result.details.map(d=>{
                            const sel = d.selected ?? '<em>tidak dijawab</em>';
                            const mark = d.isCorrect ? '<span style="color:var(--accent-green)">Benar</span>' : '<span style="color:#ff6b6b">Salah</span>';
                            return `<li>${d.question.toUpperCase()}: ${sel} — ${mark}</li>`;
                        }).join('')}
                    </ul>
                `;

                const payload = {
                    class_id: 'password-security',
                    score: result.total,
                    correct: result.correctCount,
                    answers: result.details.reduce((acc,d)=>{ acc[d.question]=d.selected; return acc; },{})
                };

                const serverRes = await submitToServer(payload);
                if (!serverRes.ok) {
                    resultContent.innerHTML += `<hr><p class="small-muted">Hasil tidak dapat disimpan ke server.</p>`;
                }
            });

            resetBtn.addEventListener('click', function(){
                for (let i=1;i<=5;i++){
                    const inputs = document.querySelectorAll('input[name="q'+i+'"]');
                    inputs.forEach(inp => { inp.checked = false; inp.closest('label').classList.remove('correct','wrong'); });
                }
                resultCard.style.display = 'none';
                resultContent.innerHTML = '';
            });
        })();
    </script>
</body>
</html>
