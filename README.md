# DevOps-study 

> 1. 팀 개발과 커뮤니케이션을 효율화 - GitHub
> 2. 보다 쉽게 Local 개발 환경을 만들고 공유 - Docker
> 3. 작업을 졍형화하고 이력을 관리 - Jenkins
> 4. 빠른 Feedback 과 빠른 Release - CI/CD

1. [Docker](https://docs.docker.com)

   - [01. Docker 사용하기](https://github.com/JeongJaeSoon/DevOps-study/blob/main/docker/01._Docker-%EC%82%AC%EC%9A%A9%ED%95%98%EA%B8%B0.md)
   - [02. Dockerfile이란?](https://github.com/JeongJaeSoon/DevOps-study/blob/main/docker/02._Dockerfile%EC%9D%B4%EB%9E%80%3F.md)
   - 정리
     - 특장점
       > - 보다 빠른 환경 구축
       > - 보다 효율적인 자원 이용
       > - 보다 공유하기 쉬운 개발 환경
     - 가상 머신과는 다르게 Root Porcess 라는 개념이 존재 _(가상머신과의 차이점)_
     - 컨테이너 : 신속하게 이용할 수 있고, 공유 가능한 것 _(이식성, Portablility)_

2. Jenkins

   - [01. Jenkins란?](https://github.com/JeongJaeSoon/DevOps-study/blob/main/jenkins/01._Jenkins%EB%9E%80%3F.md)
   - 정리
     - 명령어 작업을 이전보다 번거로움없이 수행
       > - 프로젝트 단위로 처리 작업을 묶음
       > - 선택과 클릭만으로 명령어를 자동 수행
       > - 구축과 테스트를 연속적으로 수행
     - 구축 작업을 보다 안전하고 안정적으로 수행
       > - 안전하게 명령어를 수행
       > - Parameter 가 있는 Build 로 변동 요소(변수)를 효율적으로 관리
       > - 변동 요소를 입력이 아닌 선택 방식으로 조작
     - 구축 및 테스트 결과와 이력을 축적하고 팀에서 확인
       > - 실행 이력 및 결과를 프로젝트 단위 혹은 전체 대상

3. CI/CD
   - [01. CI/CD](https://github.com/JeongJaeSoon/DevOps-study/blob/main/CI_CD/01.%20CI_CD.md)
   - [02. CI](https://github.com/JeongJaeSoon/DevOps-study/blob/main/CI_CD/02.%20CI.md)
   - [03. CD](https://github.com/JeongJaeSoon/DevOps-study/blob/main/CI_CD/03.%20CD.md)
   - [04. CI/CD 구축](https://github.com/JeongJaeSoon/DevOps-study/blob/main/CI_CD/04.%20CI_CD_%EA%B5%AC%EC%B6%95.md)

> 참고
>
> - [Github Actions 로 AWS S3 에 자동 배포하기](https://github.com/JeongJaeSoon/github_actions#readme)
