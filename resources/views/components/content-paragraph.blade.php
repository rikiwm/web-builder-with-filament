@props(['content' => ''])

@php
    if (trim($content) !== '') {
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'));

        // 1. Tambahkan class Tailwind ke elemen HTML
        $replacements = [
            'h1' => 'text-2xl font-bold py-2',
            'h2' => 'text-xl font-bold py-1',
            'h3' => 'text-lg font-bold py-1',
            'h4' => 'text-md font-bold py-1',
            'h5' => 'text-sm font-bold py-1',
            'h6' => 'text-xs font-bold py-1',
            'strong' => 'font-bold',
            'em' => 'italic',
            'ul' => 'list-disc',
            'ol' => 'list-decimal',
            'li' => 'ml-4',
            'p' => 'py-1',
            'a' => 'text-blue-600 hover:underline',
            'code' => 'bg-gray-200 rounded-lg p-1',
            'pre' => 'bg-gray-200 rounded-lg p-1',
            'blockquote' => 'border-l-4 border-gray-300 pl-4',
            'table' => 'border-collapse border border-gray-300 rounded-lg',
            'thead' => 'border-b border-gray-300',
            'tbody' => 'border-b border-gray-300',
            'tr' => 'border-b border-gray-300',
            'td' => 'border border-gray-300 p-2',
            'th' => 'border border-gray-300 p-2',
            'div' => 'mb-4',
            'span' => 'text-gray-600',
            'hr' => 'border-t border-gray-300 my-4',
            'img' => 'mx-auto w-full max-w-screen-md',
            'figure' => 'mx-auto w-full max-w-screen-md',
            'figcaption' => 'text-center text-gray-500 text-sm mt-2',
            'iframe' => 'mx-auto w-full max-w-screen-md',
            'video' => 'mx-auto w-full max-w-screen-md',
            'audio' => 'mx-auto w-full max-w-screen-md',
            'svg' => 'mx-auto w-full max-w-screen-md',
            'path' => 'mx-auto w-full max-w-screen-md',
        ];

        foreach ($replacements as $tag => $class) {
            foreach ($dom->getElementsByTagName($tag) as $element) {
                if ($element instanceof \DOMElement) {
                    $existingClass = $element->getAttribute('class');
                    $element->setAttribute('class', trim($existingClass . ' ' . $class));
                }
            }
        }

        foreach ($dom->getElementsByTagName('p') as $p) {
            if (strpos($p->textContent, '|') !== false) {
                $raw = $p->C14N(); // raw innerHTML
                $cleaned = strip_tags($raw, '<br>');
                $cleaned = html_entity_decode($cleaned);
                $cleaned = trim($cleaned);
                $lines = array_filter(array_map('trim', explode('<br>', $cleaned)));

                $tableHTML = "<table class=\"border-collapse border border-gray-300\">\n";

                    // Pisahkan baris pertama sebagai header
                    $headerPrinted = false;

                    foreach ($lines as $index => $line) {
                        $cols = array_map('trim', explode('|', trim($line, '|')));
                        if (count($cols) < 2) continue;

                        if (!$headerPrinted) {
                            // Header
                            $tableHTML .= "<thead>\n<tr class=\"border-b border-gray-300\">\n";
                            foreach ($cols as $col) {
                                $tableHTML .= "<th class=\"border border-gray-300 p-2\">" . htmlspecialchars($col) . "</th>\n";
                            }
                            $tableHTML .= "</tr>\n</thead>\n<tbody>\n";
                            $headerPrinted = true;
                        } else {
                            // Body
                            $tableHTML .= "<tr class=\"border-b border-gray-300\">\n";
                            foreach ($cols as $col) {
                                $tableHTML .= "<td class=\"border border-gray-300 p-2\">" . htmlspecialchars($col) . "</td>\n";
                            }
                            $tableHTML .= "</tr>\n";
                        }
                    }

                    $tableHTML .= "</tbody>\n</table>";


                $fragment = $dom->createDocumentFragment();
                $fragment->appendXML($tableHTML);
                
                $p->parentNode->replaceChild($fragment, $p);
            }
        }
        $content = $dom->saveHTML();
        
    }
    @endphp
    @php
        $content = str_replace('&lt;/br&gt;', '', $content);
    @endphp

<div class="prose">
    {!! $content !!}
</div>

