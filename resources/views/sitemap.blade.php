<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

     <url>
            <loc>{{ route('index.'.app()->getLocale()) }}</loc>
            <lastmod>2023-03-18T01:03:15+00:00</lastmod>
            <priority>1</priority>
    </url>

    
     <url>
            <loc>{{ route('about.'.app()->getLocale()) }}</loc>
            <lastmod>2023-03-18T01:03:15+00:00</lastmod>
            <priority>0.6</priority>
    </url>

         <url>
            <loc>{{ route('graduates.'.app()->getLocale()) }}</loc>
            <lastmod>2023-03-18T01:03:15+00:00</lastmod>
            <priority>0.8</priority>
    </url>


    <url>
            <loc>{{ route('register.'.app()->getLocale()) }}</loc>
            <lastmod>2023-03-18T01:03:15+00:00</lastmod>
            <priority>0.5</priority>
    </url>

    <url>
            <loc>{{ route('course.'.app()->getLocale()) }}</loc>
            <lastmod>2023-03-18T01:03:15+00:00</lastmod>
            <priority>0.5</priority>
    </url>

    <url>
            <loc>{{ route('blog.'.app()->getLocale()) }}</loc>
            <lastmod>2023-03-18T01:03:15+00:00</lastmod>
            <priority>0.8</priority>
    </url>

        <url>
            <loc>{{ route('vacancy.'.app()->getLocale()) }}</loc>
            <lastmod>2023-03-18T01:03:15+00:00</lastmod>
            <priority>0.5</priority>
    </url>

        <url>
            <loc>{{ route('contact.'.app()->getLocale()) }}</loc>
            <lastmod>2023-03-18T01:03:15+00:00</lastmod>
            <priority>0.5</priority>
    </url>
<url>
            <loc>{{ route('discount.'.app()->getLocale()) }}</loc>
            <lastmod>2023-03-18T01:03:15+00:00</lastmod>
            <priority>0.5</priority>
    </url>
     @foreach ($courses as $course)
        <url>
            <loc>{{ route('course_single.'.app()->getLocale(),$course->slug[app()->getLocale()]) }}</loc>
            <lastmod>{{ $course->created_at->tz('UTC')->addHours(4)->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach

    @foreach ($posts as $post)
        <url>
            <loc>{{ route('blog_single.'.app()->getLocale(),$post->slug[app()->getLocale()]) }}</loc>
            <lastmod>{{ $post->created_at->tz('UTC')->addHours(4)->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($discounts as $d)
        <url>
            <loc>{{ route('discount_single.'.app()->getLocale(),$d->slug[app()->getLocale()]) }}</loc>
            <lastmod>{{ $d->created_at->tz('UTC')->addHours(4)->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($vacancies as $v)
        <url>
            <loc>{{ route('vacancy_single.'.app()->getLocale(),$v->slug[app()->getLocale()]) }}</loc>
            <lastmod>{{ $v->created_at->tz('UTC')->addHours(4)->toAtomString() }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach


</urlset>